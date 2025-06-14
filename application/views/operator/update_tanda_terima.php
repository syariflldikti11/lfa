  
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
                      <h4 class="card-title">Update Tanda Terima</h4>
                     
                    </div>
                  </div>
                  <div class="card-body">
                      
               <?php  
                                
    echo form_open('operator/update_tanda_terima','class="form-sample"'); ?>
     

                    

                       <div class="form-group">
                        <input type="hidden" class="form-control" id="exampleInputUsername1" value="<?= $d->id_tanda_terima; ?>" name="id_tanda_terima">
                        <label for="exampleInputUsername1">No Transaksi</label>
                       <select class="js-example-basic-single form-select" style="width:100%"  name="no_transaksi" required>
                           <option value="">Pilih Pelanggan</option>
                           <?php 
                  
                    foreach ($dt_transaksi as $c):
                    ?> 
                    
                        <option value="<?= $c->no_transaksi; ?>" <?php if($d->no_transaksi==$c->no_transaksi) { echo 'selected'; } ?>><?= $c->no_transaksi; ?> </option>
                  <?php endforeach; ?>
                        </select>
                      </div>
                        <div class="form-group">
                       
                        <label for="exampleInputUsername1">Tanggal tanda_terima</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" value="<?= $d->tgl_tanda_terima; ?>" name="tgl_tanda_terima">
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



     