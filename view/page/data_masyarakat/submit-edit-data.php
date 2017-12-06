<?php
$nm = isset($_POST['nm']) ? $_POST['nm'] : "";
$jkl = isset($_POST['jkl']) ? $_POST['jkl'] : "";
$golongan = isset($_POST['golongan']) ? $_POST['golongan'] : "";
$hp = isset($_POST['hp']) ? $_POST['hp'] : "";
$almt = isset($_POST['almt']) ? $_POST['almt'] : "";
$id = isset($_POST['id']) ? $_POST['id'] : 0;
if(is_numeric($id) and $id != 0){
    mysqli_query($konek,"UPDATE `data_masyarakat` SET `nm`='".$nm."',`almt`='".$almt."',`cat_darah`='".$golongan."',`hp`='".$hp."',`jkl`='".$jkl."' WHERE `id`='".$id."'") or die(mysqli_error());
    header("Location:index.php?page=view-data");
}
