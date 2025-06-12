  <div class="container">
          <div class="page-inner">
          
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Banner</h4>
                     
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
                          
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>File</th>
                           
                            <th>Opsi</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_banner as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->judul; ?></td>
                        <td><?= $d->isi; ?></td>
                        <td> <a  target="_blank" href="<?= base_url();?>upload/<?= $d->file; ?>"><i class="fa fa-file"></i></a> </td>
                       
                       
                        <td><div align="center"><a class="btn btn-primary btn-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-bs-toggle="modal" data-bs-target="#edit"   
          data-id="<?= $d->id_banner ?>"
          data-judul="<?= $d->judul ?>"
          data-isi="<?= $d->isi ?>"
          data-file="<?= $d->file ?>"
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
<h4 class="modal-title">Update banner</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open_multipart('admin/update_banner'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">
<input type="text" class="form-control"  name="id_banner" id="id" required >
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control"  name="judul" id="judul" required >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Isi</label>
    <input type="text" class="form-control"  name="isi" id="isi" required >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">File</label>
     <input type="file" name="file" id="file" class="form-control">
                        <input type="hidden" name="old_file" id="file" required class="form-control">
    
    
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

 


<script>
$(document).ready(function() {

$('#edit').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var modal   = $(this)
modal.find('#id').attr("value",div.data('id'));
modal.find('#judul').attr("value",div.data('judul'));
modal.find('#isi').attr("value",div.data('isi'));
modal.find('#file').attr("value",div.data('file'));

});
});
</script>