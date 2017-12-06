
<div class="container">

  <div class="page-title">
    <div class="title_left">
      <h3></h3>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <form action="?page=submit-add-tsk-ambil-stock" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
        <div class="x_panel">
          <div class="x_title">
            <h2>Jumlah Stock Yang Diperlukan</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jumlah <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="qty" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
          </div>
          <div class="x_title">
            <h2>Form Informasi Pengambil Stock</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="nm" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="radio-inline">
                  <label>
                    <input type="radio" name="jkl" value="L" checked>
                    Laki - Laki
                  </label>
                </div>
                <div class="radio-inline">
                  <label>
                    <input type="radio" name="jkl" value="P">
                    Perempuan
                  </label>
                </div>
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
                    echo "<option value='$row[0]'>$row[1]</option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. Handphone <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="hp" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control" cols="10" rows="5" name="almt"></textarea>
              </div>
            </div>
          </div>
          <!-- Form Gallery -->
          <br>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="reset" name="cancel_event" class="btn btn-primary">Cancel</button>
              <button type="submit" name="submit_event" class="btn btn-success">Submit</button>
            </div>
          </div>


        </div>
      </form>
    </div>
  </div>
</div>
</div>
