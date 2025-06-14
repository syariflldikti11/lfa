  
   <?php 

 
function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
 

?>
  <div class="container">
          <div class="page-inner">
          <div class="page-header">
          <a href="<?php echo base_url('admin/detail_tanda_terima/'.$id.'/'.$id_transaksi);?>"class="btn btn-dark me-2">Kembali</a>
             
            </div>
             <div class="row">
                <div class="col-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Update Detail Tanda Terima Dokumen</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                 <?php  
             echo validation_errors();                       
    echo form_open('admin/update_detail_tanda_terima','class="form-horizontal"'); ?>
                <div class="card-body">
                 
                        <div class="form-group">
  <input type="hidden" class="form-control"  name="id_detail_tanda_terima" value="<?= $d->id_detail_tanda_terima; ?>">
  <input type="hidden" class="form-control"  name="id_tanda_terima" value="<?= $d->id_tanda_terima; ?>">
  <input type="hidden" class="form-control"  name="id_transaksi" value="<?= $id_transaksi; ?>">
    <label for="exampleInputEmail1">Detail Transaksi</label>
  <select class="js-example-basic-single form-select" style="width:100%"  name="id_detail_transaksi">
                          <option value="">Pilih</option>
    <?php foreach ($dt_detail_transaksi as $h): ?> 
      <option value="<?= $h->id_detail_transaksi; ?>" <?php if($d->id_detail_transaksi==$h->id_detail_transaksi) { echo 'selected'; } ?>>
            Jasa: <?= $h->nama_pengurusan; ?> 
            Wilayah: <?= $h->wilayah; ?> | Pemilik: <?= $h->pemilik_1; ?> Merk/Type: <?= $h->merk; ?> <?= $h->tipe; ?>
           | Jenis/Model: <?= $h->jenis; ?> <?= $h->model; ?> Nopol: <?= $h->nopol; ?> No Rangka: <?= $h->no_rangka; ?> No Mesin; <?= $h->no_mesin; ?>
        </option>
    <?php endforeach; ?>
                        </select>
    
  </div>
   
                                   
                
   <div class="form-group">

    <label for="exampleInputEmail1">Dokumen</label>
    <input type="text" class="form-control"  name="dokumen" value="<?= $d->dokumen; ?>" >
    
  </div>
  
       
                
                </div>
                 <div class="card-action">
                     <button type="submit" name="submit" class="btn btn-primary me-2">Update</button>
                   
                  </div>   
                
                 </form>     
               
                <!-- /.card-body -->
               
                <!-- /.card-footer -->
             
            </div>
           </div>
         
              <!-- /.card-body -->
            </div>

 
               
              <!-- /.card-body -->
           
</div>
</div>
 

 