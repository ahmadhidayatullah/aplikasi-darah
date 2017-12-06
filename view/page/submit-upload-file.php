<?php
date_default_timezone_set("Asia/Ujung_Pandang");
$nowYear = date("d_m_Y_Hms");

$params = $_POST['params'];
if($params == "insert") {

    $file_name = $_FILES['file_upload']['name'];
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $base_dir = "file/";
    $id_syarat = $_POST['id_syarat'];
    $id_adm = $_POST['id_adm'];
    $jeniss = $_POST['jenis_file'];
    $id_karyawan = $_POST['id_karyawan'];

    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_new_name = $id_adm . "-" . $id_syarat . "-" . $nowYear . "." . $file_ext;
    if (move_uploaded_file($tmp_file, $base_dir . $file_new_name)) {
        mysqli_query($konek, "INSERT INTO `file_upload` VALUES('','" . $id_adm . "','" . $id_syarat . "','" . $file_new_name . "','" . $jeniss . "')") or die(mysqli_error());
        if($jeniss == "pensiun" or $jeniss == "pindah"){
            header("Location:index.php?page=detail-" . $jeniss . "&id=" . $id_karyawan);
        }else{
            header("Location:index.php?page=proses-" . $jeniss . "&id=" . $id_karyawan);
        }
    } else {
//    header("Location:index.php?page=detail-".$jeniss."&id=".$id_karyawan);
    }
}else if($params == "update"){
    $id_syarat = $_POST['id_syarat'];
    $id_adm = $_POST['id_adm'];

    $r_cek = mysqli_query($konek,"SELECT `filename` FROM `file_upload` WHERE `id_adm`='".$id_adm."' AND `id_syarat`='".$id_syarat."'");
    if(mysqli_num_rows($r_cek) > 0) {

        $f_cek = mysqli_fetch_row($r_cek);
        $file_del_name = $f_cek[0];

        $base_dir = "file/";

        unlink($base_dir.$file_del_name);

        $file_name = $_FILES['file_upload']['name'];
        $tmp_file = $_FILES['file_upload']['tmp_name'];
        $jeniss = $_POST['jenis_file'];
        $id_karyawan = $_POST['id_karyawan'];

        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_new_name = $id_adm . "-" . $id_syarat . "-" . $nowYear . "." . $file_ext;
        if (move_uploaded_file($tmp_file, $base_dir . $file_new_name)) {
            mysqli_query($konek, "UPDATE `file_upload` SET `filename`='" . $file_new_name . "' WHERE `id_adm`='".$id_adm."' AND `id_syarat`='".$id_syarat."' AND `jenis`='".$jeniss."'") or die(mysqli_error());
            if($jeniss == "pensiun" or $jeniss == "pindah"){
                header("Location:index.php?page=detail-" . $jeniss . "&id=" . $id_karyawan);
            }else{
                header("Location:index.php?page=proses-" . $jeniss . "&id=" . $id_karyawan);
            }
        } else {
            echo "<script>alert('Terjadi kesalahan upload file, silahkan ulangi').history.back();</script>";
        }
    }else{
        echo "<script>alert('File untuk di ubah tidak ditemukan').history.back();</script>";
    }
}