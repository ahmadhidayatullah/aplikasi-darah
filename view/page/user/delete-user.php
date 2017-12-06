<?php
$id = mysqli_real_escape_string($konek,$_GET['id']);
$q = mysqli_query($konek,"DELETE FROM `user` WHERE `id_user` = '" . $id . "'") or die(mysqli_error());

if ($q) {
	header('location:?page=view-user');
}
?>
