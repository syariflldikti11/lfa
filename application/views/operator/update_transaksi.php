  
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
                      <h4 class="card-title">Tambah Transaksi</h4>
                     
                    </div>
                  </div>
                  <div class="card-body">
                      
               <?php  
                                
    echo form_open('admin/update_transaksi','class="form-sample"'); ?>
     

                    

                       <div class="form-group">
                        <input type="hidden" class="form-control" id="exampleInputUsername1" value="<?= $d->id_transaksi; ?>" name="id_transaksi">
                        <label for="exampleInputUsername1">Pelanggan</label>
                       <select class="js-example-basic-single form-select" style="width:100%"  name="id_pelanggan" required>
                           <option value="">Pilih Pelanggan</option>
                           <?php 
                  
                    foreach ($dt_pelanggan as $c):
                    ?> 
                    
                        <option value="<?= $c->id_pelanggan; ?>" <?php if($d->id_pelanggan==$c->id_pelanggan) { echo 'selected'; } ?>><?= $c->nama_pelanggan; ?> - <?= $c->no_hp; ?></option>
                  <?php endforeach; ?>
                        </select>
                      </div>
                        <div class="form-group">
                       
                        <label for="exampleInputUsername1">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" value="<?= $d->tgl_transaksi; ?>" name="tgl_transaksi">
                      </div>
                       <div class="form-group">
                       
                        <label for="exampleInputUsername1">Status Transaksi</label>
                       <select class="form-select"  name="status" required>
                         
                          
                    
                        <option value="1" <?php if($d->status==1) { echo 'selected'; } ?>>Diproses</option>
                        <option value="2" <?php if($d->status==2) { echo 'selected'; } ?>>Selesai</option>
                  
                        </select>
                      </div>
                      <div class="form-group">
                       
                        <label for="exampleInputUsername1">Status Pemabayaran</label>
                       <select class="form-select"  name="status_payment" required>
                         
                          
                    
                        <option value="1" <?php if($d->status_payment==1) { echo 'selected'; } ?>>Belum Bayar</option>
                        <option value="2" <?php if($d->status_payment==2) { echo 'selected'; } ?>>Lunas</option>
                  
                        </select>
                      </div>
                       
                      <div class="form-group">
                        <label for="exampleSelectGender">Pajak</label>
                        <select class="form-select" id="exampleSelectGender" name="pajak">
                         <option value="">Pilih</option>
                          <option value="Dibayar Pelanggan" <?php if($d->pajak=='Dibayar Pelanggan') { echo 'selected'; } ?>>Dibayar Pelanggan</option>
                          <option value="Bayar Sendiri" <?php if($d->pajak=='Bayar Sendiri') { echo 'selected'; } ?>>Bayar Sendiri</option>
                        </select>
                      </div>
                    
                     
                 
                  </div>
                   <div class="card-action">
                     <button type="submit" name="submit" class="btn btn-primary me-2">Update</button>
                   
                  </div>
                     </form>
                </div>
              </div>

            
         
            </div>
          </div>
        </div>



     