  
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
                      <h4 class="card-title">Jasa Daftar Baru</h4>
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
                            <th>BPKB</th>
                            <th>STCK</th>
                            <th>Samsat_1</th>
                            <th>Jasa</th>
                            <th>Built UP</th>
                            <th>Samsat_2</th>
                            <th>PT/CV</th>
                            <th>PT/CV NON NPWP</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_daftar_baru as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->wilayah; ?></td>
                        <td><?= rupiah($d->bpkb); ?></td>
                        <td><?= rupiah($d->stck); ?></td>
                        <td><?= rupiah($d->samsat_1); ?></td>
                        <td><?= rupiah($d->jasa); ?></td>
                        <td><?= rupiah($d->built_up); ?></td>
                        <td><?= rupiah($d->samsat_2); ?></td>
                        <td><?= rupiah($d->pt_cv); ?></td>
                        <td><?= rupiah($d->non_npwp); ?></td>
                        <td><div align="center"><a  class="btn btn-link btn-danger btn-lg" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('admin/delete_daftar_baru/'.$d->id_daftar_baru);?>" 
> <i class="fa fa-trash"></i></a> <a class="btn btn-link btn-primary btn-lg"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-bs-toggle="modal" data-bs-target="#edit"   
          data-id="<?= $d->id_daftar_baru ?>"
          data-wilayah="<?= $d->wilayah ?>"
          data-bpkb="<?= $d->bpkb ?>"
          data-stck="<?= $d->stck ?>"
          data-samsat_1="<?= $d->samsat_1 ?>"
          data-jasa="<?= $d->jasa ?>"
          data-built_up="<?= $d->built_up ?>"
          data-samsat_2="<?= $d->samsat_2 ?>"
          data-pt_cv="<?= $d->pt_cv ?>"
          data-non_npwp="<?= $d->non_npwp ?>"
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
<h4 class="modal-title">Update Daftar Baru</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/update_daftar_baru'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">
<input type="hidden" class="form-control"  name="id_daftar_baru" id="id" required >
    <label for="exampleInputEmail1">Wilayah</label>
    <input type="text" class="form-control"  name="wilayah" id="wilayah" required >
    
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1">BPKB</label>
    <input type="text" class="form-control"  name="bpkb" id="bpkb" required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">STCK</label>
    <input type="text" class="form-control"  name="stck" id="stck" required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">Samsat_1</label>
    <input type="text" class="form-control"  name="samsat_1" id="samsat_1" required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">Jasa</label>
    <input type="text" class="form-control"  name="jasa" id="jasa" required >
    
  </div>
  <h3>Tambahan untuk Kondisi Tertentu</h3>
   <div class="mb-3">

    <label for="exampleInputEmail1">Built UP</label>
    <input type="text" class="form-control"  name="built_up" id="built_up" required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">Samsat_2</label>
    <input type="text" class="form-control"  name="samsat_2" id="samsat_2" required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">PT/CV</label>
    <input type="text" class="form-control"  name="pt_cv" id="pt_cv" required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">PT/CV NON NPWP</label>
    <input type="text" class="form-control"  name="non_npwp" id="non_npwp" required >
    
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
<h4 class="modal-title">Tambah Daftar Baru</h4>
<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
</div>
<?php  
echo validation_errors();                       
echo form_open('admin/tambah_daftar_baru'); ?>

<!-- Modal body -->
<div class="modal-body">
<div class="mb-3">

    <label for="exampleInputEmail1">Wilayah</label>
    <input type="text" class="form-control"  name="wilayah"  required >
    
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1">BPKB</label>
    <input type="text" class="form-control"  name="bpkb"  required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">STCK</label>
    <input type="text" class="form-control"  name="stck"  required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">Samsat_1</label>
    <input type="text" class="form-control"  name="samsat_1"  required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">Jasa</label>
    <input type="text" class="form-control"  name="jasa"  required >
    
  </div>
  <h3>Tambahan untuk Kondisi Tertentu</h3>
   <div class="mb-3">

    <label for="exampleInputEmail1">Built UP</label>
    <input type="text" class="form-control"  name="built_up"  required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">Samsat_2</label>
    <input type="text" class="form-control"  name="samsat_2"  required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">PT/CV</label>
    <input type="text" class="form-control"  name="pt_cv"  required >
    
  </div>
   <div class="mb-3">

    <label for="exampleInputEmail1">PT/CV NON NPWP</label>
    <input type="text" class="form-control"  name="non_npwp"  required >
    
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
modal.find('#bpkb').attr("value",div.data('bpkb'));
modal.find('#stck').attr("value",div.data('stck'));
modal.find('#samsat_1').attr("value",div.data('samsat_1'));
modal.find('#jasa').attr("value",div.data('jasa'));
modal.find('#built_up').attr("value",div.data('built_up'));
modal.find('#samsat_2').attr("value",div.data('samsat_2'));
modal.find('#pt_cv').attr("value",div.data('pt_cv'));
modal.find('#non_npwp').attr("value",div.data('non_npwp'));

});
});
</script>