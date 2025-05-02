      
   <?php 

 
function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
 

?>
   <div class="container">
          <div class="page-inner">
        
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-address-book"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Pelanggan</p>
                          <h4 class="card-title"><?= $jumlah_pelanggan; ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-handshake"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Transaksi</p>
                          <h4 class="card-title"><?= $jumlah_transaksi; ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-money-bill-wave"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Omset Harian</p>
                          <h4 class="card-title"><?php $date=date('Y-m-d');
                           $harian = $this->db->query("Select sum(total) as harian from transaksi where tgl_transaksi='$date'")->row()->harian;
echo rupiah($harian);
                         ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="fas fa-money-bill-wave-alt"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Omset Tahunan</p>
                          <h4 class="card-title"><?php $y=$this->session->userdata('tahun');
                           $tahunan = $this->db->query("Select sum(total) as tahunan from transaksi where year(tgl_transaksi)=$y")->row()->tahunan;
echo rupiah($tahunan);
                         ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Pendapatan Tahun <?= $tahun=$this->session->userdata('tahun'); ?></div>
                     
                    </div>
                  </div>
                  <div class="card-body">
                    
                    <div id="chart"></div>
                  </div>
                </div>
              </div>

     <div class="col-md-6">
                <div class="card card-round">
                  <div class="card-body">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Pendapatan Per Jasa Tahun <?= $tahun=$this->session->userdata('tahun'); ?></div>
                      <div class="card-tools">
                       
                      </div>
                    </div>
                     <div id="pd_jasa"></div>
                   
                  <!--   <div class="card-list py-4">
                        <?php 
                    $no=1;
                    foreach ($js as $o):
                    ?> 
                      <div class="item-list">
                       
                          <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-money-bill-wave-alt"></i>
                              </button>
                       
                        <div class="info-user ms-3">
                          <div class="username"><?= $o->nama_pengurusan; ?>
                            <?php $idp=$o->id_pengurusan; ?>
                          </div>
                          <div class="status"><?php $total = $this->db->query("SELECT SUM(bpkb + stck + samsat_1 + by_proses + jasa + built_up + samsat_2 + pt_cv + non_npwp + bbn_kb + opsen_bbnkb + pkb + opsen_pkb + swdkllj + pnbpstnk + pnbptnkb) AS total FROM detail_transaksi WHERE id_pengurusan='$idp'")->row()->total;
                          echo rupiah($total); ?>
</div>
                        </div>
                       
                      </div>
                    <?php endforeach; ?>
                     
                    
                     
                    </div> -->
                  </div>
                </div>
              </div>
                 
            </div>
        
           
                  <div class="row">
                <div class="col-md-4">
                <div class="card card-round">
                  <div class="card-body">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Pelanggan Baru</div>
                      <div class="card-tools">
                       
                      </div>
                    </div>
                   
                    <div class="card-list py-4">
                        <?php 
                    $no=1;
                    foreach ($pl_baru as $ds):
                    ?> 
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="<?= base_url(); ?>assetsback/img/jm_denis.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username"><?= $ds->nama_pelanggan; ?></div>
                          <div class="status"><?= $ds->no_hp; ?></div>
                        </div>
                       
                      </div>
                    <?php endforeach; ?>
                     
                    
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Status Pembayaran</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">No Invoice</th>
                            <th scope="col" class="text-end">Tanggal</th>
                            <th scope="col" class="text-end">Total</th>
                            <th scope="col" class="text-end">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($py as $da):
                    ?> 
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                             #<?= $da->invoice ?>
                            </th>
                            <td class="text-end"><?= $da->tgl_transaksi ?></td>
                            <td class="text-end"><?= rupiah($da->total) ?></td>
                            <td class="text-end">
                              <span class="badge badge-warning">Belum Bayar</span>
                            </td>
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