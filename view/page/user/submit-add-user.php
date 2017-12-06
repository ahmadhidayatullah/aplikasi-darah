<?php
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$hasspass = md5($password);
$level = $_POST['level'];

if (empty($username) || empty($password) || empty($password2) || empty($level)) {
  echo "<script>alert('Input Harus Lengkap');history.back();</script>";
  exit();  
}

if ($password2 != $password) {
  echo "<script>alert('Konfirmasi password tidak sesuai');history.back();</script>";
  exit();
}

$q = mysqli_query($konek,"INSERT INTO `user` VALUES('','".$username."','".$hasspass."','".$level."')") or die(mysqli_error());
if($q){
  ?>
  <div class="container">
    <div class="page-title">
      <div class="title_left">
        <h3></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Konfirmasi</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="alert alert-success">Berhasil</div>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
}

?>