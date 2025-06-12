  
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
                                
    echo form_open('admin/tambah_transaksi','class="form-sample"'); ?>
     

                    

                       <div class="form-group">
                       
                        <label for="exampleInputUsername1">Pelanggan</label>
                       <select class="js-example-basic-single form-select" style="width:100%"  name="id_pelanggan" required>
                           <option value="">Pilih Pelanggan</option>
                           <?php 
                  
                    foreach ($dt_pelanggan as $a):
                    ?> 
                       <option value="<?= $a->id_pelanggan; ?>"><?= $a->nama_pelanggan; ?> - <?= $a->no_hp; ?></option>
                  <?php endforeach; ?>
                        </select>
                      </div>
                        <div class="form-group">
                       
                        <label for="exampleInputUsername1">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" name="tgl_transaksi" required>
                      </div>
                       <div class="form-group">
                        <label for="exampleSelectGender">Pajak</label>
                        <select class="form-select" id="exampleSelectGender" name="pajak" required>
                          <option value="">Pilih</option>
                          <option value="Dibayar Pelanggan">Dibayar Pelanggan</option>
                          <option value="Bayar Sendiri">Bayar Sendiri</option>
                        </select>
                      </div>
                       
                       
                     
                    
                     
                 
                  </div>
                   <div class="card-action">
                     <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                   
                  </div>
                     </form>
                </div>
              </div>

            
         
            </div>
          </div>
        </div>



     