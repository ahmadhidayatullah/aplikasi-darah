<?php

if($LEVEL_USER == "administrator"){
	if ($page=="home" xor $page == "" ) {
		include "view/page/home/home.php";
	}elseif ($page == "logout") {
		session_destroy();
		header("Location:login.php");

		//start user
	}elseif ($page == "view-user") {
		include "view/page/user/view-user.php";
	}elseif ($page == "delete-user") {
		include "view/page/user/delete-user.php";
	}elseif ($page == "add-user") {
		include "view/page/user/add-user.php";
	}elseif ($page == "submit-add-user") {
		include "view/page/user/submit-add-user.php";
	}elseif ($page == "edit-user") {
		include "view/page/user/edit-user.php";
	}elseif($page == "submit-edit-user"){
		include "view/page/user/submit-edit-user.php";
		//start stock darah
	}elseif ($page == "view-stock") {
		include "view/page/stock/view-stock.php";
		//start categori
	}elseif ($page == "view-cat") {
		include "view/page/cat_darah/view-cat.php";
	}elseif ($page == "delete-cat") {
		include "view/page/cat_darah/delete-cat.php";
	}elseif ($page == "add-cat") {
		include "view/page/cat_darah/add-cat.php";
	}elseif ($page == "submit-add-cat") {
		include "view/page/cat_darah/submit-add-cat.php";
	}elseif ($page == "edit-cat") {
		include "view/page/cat_darah/edit-cat.php";
	}elseif($page == "submit-edit-cat"){
		include "view/page/cat_darah/submit-edit-cat.php";
		//start data masyarakat
	}elseif ($page == "view-data") {
		include "view/page/data_masyarakat/view-data.php";
	}elseif ($page == "delete-data") {
		include "view/page/data_masyarakat/delete-data.php";
	}elseif ($page == "add-data") {
		include "view/page/data_masyarakat/add-data.php";
	}elseif ($page == "submit-add-data") {
		include "view/page/data_masyarakat/submit-add-data.php";
	}elseif ($page == "edit-data") {
		include "view/page/data_masyarakat/edit-data.php";
	}elseif($page == "submit-edit-data"){
		include "view/page/data_masyarakat/submit-edit-data.php";
		//start donor darah
	}elseif ($page == "view-tsk-donor-darah") {
		include "view/page/transaksi/donor_darah/view-tsk-donor-darah.php";
	}elseif ($page == "delete-tsk-donor-darah") {
		include "view/page/transaksi/donor_darah/delete-tsk-donor-darah.php";
	}elseif ($page == "add-tsk-donor-darah") {
		include "view/page/transaksi/donor_darah/add-tsk-donor-darah.php";
	}elseif ($page == "submit-add-tsk-donor-darah") {
		include "view/page/transaksi/donor_darah/submit-add-tsk-donor-darah.php";
		//start ambil stock
	}elseif ($page == "view-tsk-ambil-stock") {
		include "view/page/transaksi/ambil_stock/view-tsk-ambil-stock.php";
	}elseif ($page == "delete-tsk-ambil-stock") {
		include "view/page/transaksi/ambil_stock/delete-tsk-ambil-stock.php";
	}elseif ($page == "add-tsk-ambil-stock") {
		include "view/page/transaksi/ambil_stock/add-tsk-ambil-stock.php";
	}elseif ($page == "submit-add-tsk-ambil-stock") {
		include "view/page/transaksi/ambil_stock/submit-add-tsk-ambil-stock.php";
		//
	}else{
		include "view/page/not_found.php";
	}
}else if($LEVEL_USER == "karyawan"){
	if ($page=="home" xor $page == "") {
		include "view/page/karyawan/profile-karyawan.php";
	}elseif($page == "submit-edit-karyawan") {
		include "view/page/karyawan/submit-edit-karyawan.php";
	}elseif($page == "edit-karyawan"){
		include "view/page/karyawan/edit-karyawan.php";
	}elseif ($page == "logout") {
		session_destroy();
		header("Location:login.php");
	}else{
		include "view/page/not_found.php";
	}
}
?>
