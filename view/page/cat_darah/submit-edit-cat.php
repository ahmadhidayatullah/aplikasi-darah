<?php
$cat_darah = isset($_POST['cat_darah']) ? $_POST['cat_darah'] : "";
$id_darah = isset($_POST['id']) ? $_POST['id'] : 0;
if(!empty($cat_darah) and is_numeric($id_darah) and $id_darah != 0){
    mysqli_query($konek,"UPDATE `cat_darah` SET `nm`='".$cat_darah."' WHERE `id`='".$id_darah."'");
    header("Location:index.php?page=view-cat");
}
