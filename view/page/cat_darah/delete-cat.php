<?php
$id = mysqli_real_escape_string($konek,$_GET['id']);
$q = mysqli_query($konek,"DELETE FROM `cat_darah` WHERE `id` = '" . $id . "'") or die(mysqli_error());

if ($q) {
	header('location:?page=view-cat');
}
?>
