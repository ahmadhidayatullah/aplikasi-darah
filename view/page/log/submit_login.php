<?php
$user = isset($_POST['user']) ? $_POST['user'] : "";
$pass = isset($_POST['pass']) ? $_POST['pass'] : "";
$pass = md5($pass);
$q = mysqli_query($konek,"select * from `user` where `username`='" . mysqli_real_escape_string($konek,$user) . "' and `password`='" . mysqli_real_escape_string($konek,$pass) . "'") or die(mysqli_error());
$fetch = mysqli_fetch_array($q);
if (!empty($fetch)) {
    session_start();
    $_SESSION['user_605'] = $fetch['username'];
    $_SESSION['pass_605'] = $fetch['password'];
    $_SESSION['level_605'] = $fetch['level'];
    if($fetch['level'] == "karyawan"){
        $q_kry = "SELECT `nama_lengkap` FROM `karyawan` WHERE `no_induk`='".$fetch['username']."'";
        $r_kry = mysqli_query($konek,$q_kry);
        $f_kry = mysqli_fetch_row($r_kry);
        $_SESSION['karyawan_name'] = $f_kry[0];
        header("Location:index.php?page=home");
    }else{
        header("Location:index.php?page=home");
    }
//    echo "<script>window.location.href='index.php?page=home';</script>";
} else {
    echo "<script>alert('Periksa Masukkan Anda');history.back();</script>";
}
?>
