<?php
$nm = $_POST['nm'];
$jkl = $_POST['jkl'];
$golongan = $_POST['golongan'];
$hp = $_POST['hp'];
$almt = $_POST['almt'];

if (empty($nm) || empty($jkl) || empty($golongan) || empty($hp) || empty($almt)) {
  echo "<script>alert('Input Harus Lengkap');history.back();</script>";
  exit();
}

$q = mysqli_query($konek,"INSERT INTO `data_masyarakat` VALUES('','".$nm."','".$almt."','".$golongan."','".$hp."','".$jkl."',now())") or die(mysqli_error());
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
