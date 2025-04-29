  <div class="container">
          <div class="page-inner">
          
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Jasa Pengurusan</h4>
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
                            <th>Nama Jasa Pengurusan</th>
                          
                            <th>Opsi</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_pengurusan as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->nama_pengurusan; ?></td>
                       
                        <td><div align="center"><a  class="btn btn-link btn-danger btn-lg" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('admin/delete_pengurusan/'.$d->id_pengurusan);?>" 
> <i class="fa fa-trash"></i></a> <a class="btn btn-link btn-primary btn-lg"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-bs-toggle="modal" data-bs-target="#edit"   
          data-id="<?= $d->id_pengurusan ?>"
          data-nama_pengurusan="<?= $d->nama_pengurusan ?>"
          > 
 <i class="fa fa-edit"></i></a> <a  class="btn btn-link btn-success btn-lg" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Detail" 
href="<?php echo base_url('admin/detail_pengurusan/'.$d->id_pengurusan);?>" 
> <i class="fa fa-list"></i></a> </div></td>
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
<h4 class="modal-title">Update Jasa Pengurusan</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/update_pengurusan'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">
<input type="hidden" class="form-control"  name="id_pengurusan" id="id" required >
    <label for="exampleInputEmail1">Nama Pengurusan</label>
    <input type="text" class="form-control"  name="nama_pengurusan" id="nama_pengurusan" required >
    
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
<h4 class="modal-title">Tambah Jasa Pengurusan</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/simpan_pengurusan'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">

    <label for="exampleInputEmail1">Nama Pengurusan</label>
    <input type="text" class="form-control"  name="nama_pengurusan"  required >
    
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
modal.find('#nama_pengurusan').attr("value",div.data('nama_pengurusan'));

});
});
</script>