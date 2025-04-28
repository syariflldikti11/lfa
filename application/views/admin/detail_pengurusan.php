   
   <?php 

 
function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
 

?>
  <div class="container">
          <div class="page-inner">
          
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Detail Pengurusan <?= $a->nama_pengurusan; ?></h4>
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
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>No</th>
                          
                            <th>Wilayah</th>
                            <th>By Proses</th>
                            <th>Jasa</th>
                          
                            <th>Opsi</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_detail_pengurusan as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                     
                        <td><?= $d->wilayah; ?></td>
                        <td><?= rupiah($d->by_proses); ?></td>
                        <td><?= rupiah($d->jasa); ?></td>
                        
                        <td><div align="center"><a  class="btn btn-link btn-danger btn-lg" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('admin/delete_detail_pengurusan/'.$d->id_detail_pengurusan.'/'.$d->id_pengurusan);?>" 
> <i class="fa fa-trash"></i></a> <a class="btn btn-link btn-primary btn-lg"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-bs-toggle="modal" data-bs-target="#edit"   
          data-id="<?= $d->id_detail_pengurusan ?>"
          data-wilayah="<?= $d->wilayah ?>"
          data-by_proses="<?= $d->by_proses ?>"
          data-jasa="<?= $d->jasa ?>"
          > 
 <i class="fa fa-edit"></i></a></div></td>
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
<h4 class="modal-title">Update Detail Pengurusan</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/update_detail_pengurusan'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">
<input type="hidden" class="form-control"  name="id_detail_pengurusan" id="id" required >
<input type="hidden" class="form-control"  name="id_pengurusan" value="<?= $id; ?>" required >
    <label for="exampleInputEmail1">Wilayah</label>
    <input type="text" class="form-control"  name="wilayah" id="wilayah" required >
    
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1">By Proses</label>
    <input type="text" class="form-control"  name="by_proses" id="by_proses" required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">Jasa</label>
    <input type="text" class="form-control"  name="jasa" id="jasa" required >
    
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
<h4 class="modal-title">Tambah Detail Pengurusan</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/simpan_detail_pengurusan'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">
<input type="hidden" class="form-control"  name="id_pengurusan" value="<?= $id; ?>" required >
    <label for="exampleInputEmail1">Wilayah</label>
    <input type="text" class="form-control"  name="wilayah"  required >
    
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1">By Proses</label>
    <input type="text" class="form-control"  name="by_proses"  required >
    
  </div>
  
   <div class="mb-3">

    <label for="exampleInputEmail1">Jasa</label>
    <input type="text" class="form-control"  name="jasa"  required >
    
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
modal.find('#wilayah').attr("value",div.data('wilayah'));
modal.find('#by_proses').attr("value",div.data('by_proses'));

modal.find('#jasa').attr("value",div.data('jasa'));


});
});
</script>