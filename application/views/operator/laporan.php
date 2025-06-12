  <div class="container">
          <div class="page-inner">
          
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Laporan</h4>
                      
                    </div>
                  </div>
                  <div class="card-body">
                  <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab-icon" data-bs-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fas fa-handshake"></i>
                       Transaksi
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab-icon" data-bs-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="fas fa-file-archive"></i>
                        Detail Transaksi
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
                        <i class="fas fa-money-bill-wave-alt"></i>
                     Pendapatan
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill" href="#pills-pajak-icon" role="tab" aria-controls="pills-pajak-icon" aria-selected="false">
                        <i class="fas fa-money-bill-wave-alt"></i>
                     Pajak
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                        <?php  
             echo validation_errors();                       
    echo form_open('operator/laporan_transaksi'); ?>
  <div class="form-group">
                        <label for="exampleSelectGender">Pelanggan</label>
                      <select class="js-example-basic-single form-select" style="width:100%" id="exampleSelectGender" name="id_pelanggan">
                         <option value="!='semua'">Semua Pelanggan</option>
                           <?php 
                  
                    foreach ($dt_pelanggan as $a):
                    ?> 
                       <option value="='<?= $a->id_pelanggan; ?>'"><?= $a->nama_pelanggan; ?></option>
                  <?php endforeach; ?>
                        </select>
                      </div>
                        <div class="form-group">
                        <label for="exampleSelectGender">Status Proses</label>
                      <select class="form-select" name="status">
                         <option value="!=0">Semua Status</option>
                         <option value="=1">Di Proses</option>
                         <option value="=2">Selesai</option>
                          
                        </select>
                      </div>
 <div class="form-group">
                        <label for="exampleSelectGender">Status Pembayaran</label>
                      <select class="form-select" name="status_payment">
                         <option value="!=0">Semua Status</option>
                         <option value="=1">Belum Bayar</option>
                         <option value="=2">Lunas</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Dari tanggal</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="dari" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Sampai tanggal</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="sampai" required>
                      </div>
                  
                       <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     </form>

                    </div>
                    <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                       <?php  
             echo validation_errors();                       
    echo form_open('operator/laporan_detail_transaksi'); ?>
   
  <div class="form-group">
                        <label for="exampleSelectGender">No Transaksi</label>
                      <select class="js-example-basic-single form-select" style="width:100%" id="exampleSelectGednder" name="no_transaksi">
                         <option value="!='semua'">Semua Transaksi</option>
                           <?php 
                  
                    foreach ($dt_transaksi as $a):
                    ?> 
                       <option value="='<?= $a->no_transaksi; ?>'"><?= $a->no_transaksi; ?></option>
                  <?php endforeach; ?>
                        </select>
                      </div>
                       
                      <div class="form-group">
                        <label for="exampleInputPassword1">Dari tanggal</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="dari" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Sampai tanggal</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="sampai" required>
                      </div>
                  
                       <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     </form>
                    </div>
                    <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
                    
                        <?php  
             echo validation_errors();                       
    echo form_open('operator/laporan_pendapatan'); ?>
 
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tahun</label>
                        <input type="number" value="<?= date('Y'); ?>" class="form-control" id="exampleInputPassword1" name="tahun" required>
                      </div>
                      
                  
                       <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     </form>
                    </div>


 <div class="tab-pane fade" id="pills-pajak-icon" role="tabpanel" aria-labelledby="pills-pajak-tab-icon">
                    
                        <?php  
             echo validation_errors();                       
    echo form_open('operator/laporan_pajak'); ?>
 
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Pajak</label>
                        <input type="number" value="<?= date('Y'); ?>" class="form-control" id="exampleInputPassword1" name="tahun" required>
                      </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Persentasi Pajak</label>
                        <input type="text" value="2" class="form-control" id="exampleInputPassword1" name="persentase" required>
                      </div>
                      
                  
                       <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     </form>
                    </div>

                  </div>
                </div>
                </div>
              </div>

            
         
            </div>
          </div>
        </div>
