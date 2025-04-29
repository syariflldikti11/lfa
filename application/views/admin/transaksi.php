  <div class="container">
          <div class="page-inner">
          
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Transaksi</h4>
                       <a
                        class="btn btn-primary btn-round ms-auto"
                   href="<?php echo base_url('admin/tambah_transaksi');?>" 
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
                             <th>Status</th>
                            <th>No Trankasi</th>
                             <th>Tgl Transaksi</th>
                            <th>Pelanggan</th>
                           <th>Pemabayaran</th>
                           
                          
                            <th>Opsi</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_transaksi as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                        <td><?php if($d->status==2) :?><span class="badge badge-success">Selesai</span><?php endif; ?>
                        <?php if($d->status==1) :?><span class="badge badge-warning">Diproses</span><?php endif; ?></td>
                        <td><?= $d->no_transaksi; ?></td>
                        <td><?= $d->tgl_transaksi; ?></td>
                        <td><?= $d->nama_pelanggan; ?> | <?= $d->no_hp; ?></td>
                        
                       <td><?php if($d->status_payment==2) :?><span class="badge badge-success">Lunas</span><?php endif; ?>
                        <?php if($d->status_payment==1) :?><span class="badge badge-warning">Belum Bayar</span><?php endif; ?></td>
                       
                        <td><div align="center"><a  class="btn  btn-danger btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('admin/delete_transaksi/'.$d->id_transaksi);?>" 
> <i class="fa fa-trash"></i></a> <a  class="btn  btn-primary btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" 
href="<?php echo base_url('admin/update_transaksi/'.$d->id_transaksi);?>" 
> <i class="fa fa-edit"></i></a>  <a  class="btn  btn-success btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Detail" 
href="<?php echo base_url('admin/detail_transaksi/'.$d->id_transaksi);?>" 
> <i class="fa fa-list"></i></a> </div></td>
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



    