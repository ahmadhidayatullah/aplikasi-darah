<div class="container">

  <div class="page-title">
    <div class="title_left">
      <h3>Stock Darah</h3>
    </div>
  </div>
  <div class="clearfix"></div>
  <!-- Heading Row -->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Stock darah</h2>
          
          <div class="clearfix"></div>
        </div>
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th>#</th>
            <th>Golongan</th>
            <th>Stock</th>
            <!-- <th>Aksi</th> -->
          </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          $q = mysqli_query($konek,"SELECT * FROM `stock_darah`") or die(mysqli_error());
          while ($row = mysqli_fetch_row($q)) {
            $c = mysqli_query($konek,"SELECT `nm` FROM `cat_darah` WHERE `id`='".$row[0]."' ") or die(mysqli_error());
            $f = mysqli_fetch_array($c);
            ?>
            <tr>
              <td><?=$no?></td>
              <td><?=$f[0]?></td>
              <td><?=$row[1]?></td>
              <!-- <td>
                <a href="?page=edit-user&id=<?= $row[0]?>" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-expand"></i> Edit</a>
                <button data-href="?page=delete-user&id=<?= $row[0]?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o"></i> delete</button>

              </td> -->
            </tr>
            <?php
            $no++;
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Parmanently</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure about this ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-ok">Delete</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
  $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
</script>
