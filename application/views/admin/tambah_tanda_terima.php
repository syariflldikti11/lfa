  
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
                      <h4 class="card-title">Tambah Tanda Terima</h4>
                     
                    </div>
                  </div>
                  <div class="card-body">
                      
               <?php  
                                
    echo form_open('admin/tambah_tanda_terima','class="form-sample"'); ?>
     

                    

                       <div class="form-group">
                       
                        <label for="exampleInputUsername1">No Transaki</label>
                       <select class="js-example-basic-single form-select" style="width:100%"  name="id_transaksi" required>
                           <option value="">Pilih Transaksi</option>
                           <?php 
                  
                    foreach ($dt_transaksi as $a):
                    ?> 
                       <option value="<?= $a->id_transaksi; ?>"><?= $a->no_transaksi; ?></option>
                  <?php endforeach; ?>
                        </select>
                      </div>
                        <div class="form-group">
                       
                        <label for="exampleInputUsername1">Tanggal Tanda Terima</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" name="tgl_tanda_terima" required>
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



     