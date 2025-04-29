  <div class="container">
          <div class="page-inner">
          
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Pelanggan</h4>
                      <button
                        class="btn btn-primary btn-round ms-auto"
                   data-bs-toggle="modal" data-bs-target="#add" 
                      >
                        <i class="fa fa-plus"></i>
                        Tambah
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="basic-datatables"
                          class="table table-striped"
                      >
                       <thead class="table-dark">
                          <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>No HP</th>       
                            <th>Opsi</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_pelanggan as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->nama_pelanggan; ?></td>
                        <td><?= $d->alamat; ?></td>
                        <td><?= $d->no_hp; ?></td>
                       
                        <td><div align="center"><a  class="btn  btn-danger btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('admin/delete_pelanggan/'.$d->id_pelanggan);?>" 
> <i class="fa fa-trash"></i></a> <a class="btn  btn-primary btn-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-bs-toggle="modal" data-bs-target="#edit"   
          data-id="<?= $d->id_pelanggan ?>"
          data-nama_pelanggan="<?= $d->nama_pelanggan ?>"
          data-alamat="<?= $d->alamat ?>"
          data-no_hp="<?= $d->no_hp ?>"
          > 
 <i class="fa fa-edit"></i></a>  </div></td>
                    </tr>
                   <?php endforeach; ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            
         
            </div>
          </div>
        </div>



        <div class="modal fade" id="edit" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Update Pelanggan</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/update_pelanggan'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">
<input type="hidden" class="form-control"  name="id_pelanggan" id="id" required >
    <label for="exampleInputEmail1">Nama pelanggan</label>
    <input type="text" class="form-control"  name="nama_pelanggan" id="nama_pelanggan" required >
    
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" class="form-control"  name="alamat" id="alamat"  required >
    
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1">No HP</label>
    <input type="number" class="form-control"  name="no_hp" id="no_hp"  required >
    
  </div>

</div>

<!-- Modal footer -->
<div class="modal-footer">

<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
<input type="submit" name="submit"  class="btn btn-info btn-pill" value="Update">

</div>
</form>
</div>
</div>
</div>

 <div class="modal fade" id="add" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Tambah Pelanggan</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/simpan_pelanggan'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">

    <label for="exampleInputEmail1">Nama pelanggan</label>
    <input type="text" class="form-control"  name="nama_pelanggan"  required >
    
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" class="form-control"  name="alamat"  required >
    
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1">No HP</label>
    <input type="number" class="form-control"  name="no_hp"  required >
    
  </div>

</div>

<!-- Modal footer -->
<div class="modal-footer">

<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
<input type="submit" name="submit"  class="btn btn-info btn-pill" value="Submit">

</div>
</form>
</div>
</div>
</div>

<script>
$(document).ready(function() {

$('#edit').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var modal   = $(this)
modal.find('#id').attr("value",div.data('id'));
modal.find('#nama_pelanggan').attr("value",div.data('nama_pelanggan'));
modal.find('#alamat').attr("value",div.data('alamat'));
modal.find('#no_hp').attr("value",div.data('no_hp'));

});
});
</script>