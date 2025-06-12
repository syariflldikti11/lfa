  
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
                      <h4 class="card-title">Data User Aplikasi</h4>
                     
                    </div>
                  </div>
                  <div class="card-body">
                      <h4 class="card-title">Tambah Akun</h4>
               <?php  
                                
    echo form_open('admin/tambah_user','class="form-sample"'); ?>
     <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

                      <div class="form-group">
                       
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="username">
                      </div>
                      <div class="form-group">
                       
                        <label for="exampleInputUsername1">Password</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="password">
                      </div>
                       <div class="form-group">
                        <label for="exampleSelectGender">Akses</label>
                        <select class="form-select" id="exampleSelectGender" name="akses">
                          <option value="1">Admin</option>
                          <option value="2">Operator</option>
                        </select>
                      </div>
                     
                       
                     
                      <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     
                    </form>
                  </div>
                </div>
              </div>

            
         
            </div>
          </div>
        </div>



     