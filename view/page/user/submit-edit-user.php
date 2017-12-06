<?php
$username = isset($_POST['username']) ? $_POST['username'] : "";
$id_user = isset($_POST['id']) ? $_POST['id'] : 0;
if(!empty($username) and is_numeric($id_user) and $id_user != 0){
    mysqli_query($konek,"UPDATE `user` SET `username`='".$username."' WHERE `id_user`='".$id_user."'");
    header("Location:index.php?page=view-user");
}