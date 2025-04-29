  <div class="container">
          <div class="page-inner">
          
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Profil Perusahaan</h4>
                     
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
                            <th>Nama Perusahaan</th>
                            <th>Pimpinan</th>
                            <th>Alamat_1</th>
                            <th>Alamat_2</th>
                            <th>Nama Bank</th>
                            <th>No Rekening</th>
                            <th>Nama Rekening</th>
                          
                            <th>Opsi</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_profil as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->nama_perusahaan; ?></td>
                        <td><?= $d->pimpinan; ?></td>
                        <td><?= $d->alamat_1; ?></td>
                        <td><?= $d->alamat_2; ?></td>
                        <td><?= $d->bank; ?></td>
                        <td><?= $d->no_rekening; ?></td>
                        <td><?= $d->nama_rekening; ?></td>
                       
                        <td><div align="center"><a class="btn btn-link btn-primary btn-lg"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-bs-toggle="modal" data-bs-target="#edit"   
          data-id="<?= $d->id_profil ?>"
          data-nama_perusahaan="<?= $d->nama_perusahaan ?>"
          data-pimpinan="<?= $d->pimpinan ?>"
          data-alamat_1="<?= $d->alamat_1 ?>"
          data-alamat_2="<?= $d->alamat_2 ?>"
          data-bank="<?= $d->bank ?>"
          data-no_rekening="<?= $d->no_rekening ?>"
          data-nama_rekening="<?= $d->nama_rekening ?>"
          > 
 <i class="fa fa-edit"></i></a> </div></td>
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
<h4 class="modal-title">Update Profil</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/update_profil'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">
<input type="hidden" class="form-control"  name="id_profil" id="id" required >
    <label for="exampleInputEmail1">Nama Perusahaan</label>
    <input type="text" class="form-control"  name="nama_perusahaan" id="nama_perusahaan" required >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Pimpinan</label>
    <input type="text" class="form-control"  name="pimpinan" id="pimpinan" required >
    
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1">Alamat_1</label>
    <input type="text" class="form-control"  name="alamat_1" id="alamat_1" required >
    
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1">Alamat_2</label>
    <input type="text" class="form-control"  name="alamat_2" id="alamat_2" required >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Bank</label>
    <input type="text" class="form-control"  name="bank" id="bank" required >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">No Rekening</label>
    <input type="text" class="form-control"  name="no_rekening" id="no_rekening" required >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Nama Rekening</label>
    <input type="text" class="form-control"  name="nama_rekening" id="nama_rekening" required >
    
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


<script>
$(document).ready(function() {

$('#edit').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var modal   = $(this)
modal.find('#id').attr("value",div.data('id'));
modal.find('#nama_perusahaan').attr("value",div.data('nama_perusahaan'));
modal.find('#pimpinan').attr("value",div.data('pimpinan'));
modal.find('#alamat_1').attr("value",div.data('alamat_1'));
modal.find('#alamat_2').attr("value",div.data('alamat_2'));
modal.find('#bank').attr("value",div.data('bank'));
modal.find('#nama_rekening').attr("value",div.data('nama_rekening'));
modal.find('#no_rekening').attr("value",div.data('no_rekening'));

});
});
</script>