  
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
                      <a
                        class="btn btn-primary btn-round ms-auto"
                   href="<?php echo base_url('admin/tambah_user');?>" 
                      >
                        <i class="fa fa-plus"></i>
                        Tambah
                      </a>
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
                            <th>Username</th>
                            <th>Akses</th>
                           
                         
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_user as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                    <td><?= $d->username; ?></td>
                 
                <td><?php if($d->akses==1): ?>
                  Admin
                    <?php endif; ?>
                    <?php if($d->akses==2): ?>
                 Operator
                    <?php endif; ?></td>
                   
                        
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



     