<?php
//coba edit
//tambah edit
session_start();
ob_start();
include_once './conf/kon.php';
$page = isset($_GET['page']) ? $_GET['page'] : "";
include_once "control/control2.php";
?>
