<?php
$id = mysqli_real_escape_string($konek,$_GET['id']);
$q = mysqli_query($konek,"SELECT * FROM `data_masyarakat` WHERE `id`='".$id."'");
$fetch = mysqli_fetch_array($q);
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
          <h2>Form Edit Data</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>
          <form action="?page=submit-edit-data" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="nm" value="<?= $fetch[1]?>" required="required" class="form-control col-md-7 col-xs-12">
                <input type="hidden" name="id" value="<?= $fetch[0]?>" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php
                    $jkl = array('L','P');
                    for ($i=0; $i <=sizeof($jkl)-1 ; $i++) {
                      if ($fetch[5]==$jkl[$i]) {
                        echo "<div class=\"radio-inline\">";
                        echo "<label>";
                        echo "<input type=\"radio\" name=\"jkl\" value=\"$jkl[$i]\" checked> $jkl[$i]";
                        echo "</label>";
                        echo "</div>";
                      }else {
                        echo "<div class=\"radio-inline\">";
                        echo "<label>";
                        echo "<input type=\"radio\" name=\"jkl\" value=\"$jkl[$i]\"> $jkl[$i]";
                        echo "</label>";
                        echo "</div>";
                      }
                    }
                    ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Golongan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="golongan">
                    <?php
                    $q = mysqli_query($konek,"SELECT * FROM `cat_darah`") or die(mysqli_error());
                    while ($row = mysqli_fetch_array($q)) {
                      if ($fetch[3]==$row[0]) {
                        echo "<option value='$row[0]' selected>$row[1]</option>";
                      }else{
                        echo "<option value='$row[0]'>$row[1]</option>";
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. Handphone <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="hp" required="required" value="<?= $fetch[4]?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea class="form-control" cols="10" rows="5" name="almt"><?= $fetch[2]?></textarea>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="reset" name="cancel_event" class="btn btn-primary">Cancel</button>
                  <button type="submit" name="submit_event" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
            <!-- Form Gallery -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  // When the document is ready
  $(document).ready(function () {

    $('#example1').datepicker({
      format: "yyyy/mm/dd"
    });

  });
  </script>
