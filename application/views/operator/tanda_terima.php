     
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
                      <h4 class="card-title">Tanda Terima</h4>
                       <a
                        class="btn btn-primary btn-round ms-auto"
                   href="<?php echo base_url('operator/tambah_tanda_terima');?>" 
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
                            
                            <th>No Tanda Terima</th>
                            <th>No Trankasi</th>
                             <th>Tgl Tanda Terima</th>
                            <th>Pelanggan</th>
                          
                          
                           
                          
                            <th>Opsi</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_tanda_terima as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                       
                        <td><?= $d->no_tanda_terima; ?>/TT-BJ-LFA/<?= date('m'); ?>/<?= date('Y'); ?></td>
                        <td><?= $d->no_transaksi; ?></td>
                        <td><?= $d->tgl_tanda_terima; ?></td>
                        <td><?= $d->nama_pelanggan; ?> | <?= $d->no_hp; ?></td>
                        
                      
                        <td><div align="center"><a  class="btn  btn-danger btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('operator/delete_tanda_terima/'.$d->id_tanda_terima);?>" 
> <i class="fa fa-trash"></i></a> <a  class="btn  btn-primary btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" 
href="<?php echo base_url('operator/update_tanda_terima/'.$d->id_tanda_terima);?>" 
> <i class="fa fa-edit"></i></a>  <a  class="btn  btn-success btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Detail" 
href="<?php echo base_url('operator/detail_tanda_terima/'.$d->id_tanda_terima.'/'.$d->id_transaksi);?>" 
> <i class="fa fa-list"></i></a> 
<a  class="btn  btn-dark btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Tanda Terima" 
href="<?php echo base_url('operator/receipt/'.$d->id_tanda_terima);?>" 
> <i class="fa fa-print"></i></a> </div></td>
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



    