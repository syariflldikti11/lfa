<style type="text/css">
  /* Style untuk Modal */
.modal {
    display: none; /* Defaultnya disembunyikan */
    position: fixed;
    z-index: 1; /* Diletakkan di atas konten lainnya */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Background gelap transparan */
}

/* Konten Modal */
.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    border-radius: 5px;
}

/* Tombol tutup */
.close-btn {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

/* Hover pada tombol tutup */
.close-btn:hover,
.close-btn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

</style>
            <div class="row">
         <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah BTTB Pelanggan Umum</h4>  
                      <a href="#" id="openModalLink2" class="btn btn-warning">Tambah Pengirim</a>
                    <a href="#" id="openModalLink1" class="btn btn-primary">Tambah Penerima</a>
                  
                   
             
                    <?php  
                                 
    echo form_open('admin/tambah_bttb_umum','class="form-sample"'); ?>
                     <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>
                      <div class="row">
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No BTTB</label>
                            <div class="col-sm-9">
                              <input type="number" required class="form-control" name="nobttb"  />
                            </div>
                          </div>
                        </div>

                      
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jml Colly</label>
                            <div class="col-sm-9">
                              <input type="number" name="colly" class="form-control" />
                            </div>
                          </div>
                        </div>
                          
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal BTTB</label>
                            <div class="col-sm-9">
                              <input type="date" required class="form-control" name="tgl_bttb" value="<?= date('Y-m-d'); ?>" />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jml Dus</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="dos" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kota Asal</label>
                            <div class="col-sm-9">
                             
                        <input type="text" value="Banjarmasin" required name="kota_asal" class="form-control" />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Berat KG</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="kg" />
                            </div>
                          </div>
                        </div>
                       
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">       
                            <label class="col-sm-3 col-form-label">Pengirim</label>

                            <div class="col-sm-9">
                             <select class="js-example-basic-single form-select" style="width:100%" id="exampleSelectGendeadrr" name="id_pelanggan" required>
                         <option value="">Pilih</option>
                           <?php 
                  
                    foreach ($dt_pelanggan as $h):
                    ?> 
                       <option value="<?= $h->id_pelanggan; ?>"><?= $h->nama_pelanggan; ?></option>
                  <?php endforeach; ?>
                        </select>
                            </div>
                           
                          </div>
                           
                        </div>

                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Biaya Per Colly</label>
                            <div class="col-sm-9">
                              <input type="number" id="harga" class="form-control" name="biaya_paket" required readonly  />
                            </div>
                          </div>
                        </div>
                         
                      </div>
                     
                      <div class="row">
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kota Tujuan</label>
                            <div class="col-sm-9">
                             <select class="js-example-basic-single form-select" style="width:100%" id="exampleSelectGesndeadrr" name="kota_tujuan" required>
    <option value="">Pilih</option>
    <?php foreach ($dt_tujuan as $h): ?> 
        <option value="<?= $h->kota_tujuan; ?>" data-harga="<?= $h->harga_per_colly; ?>">
            <?= $h->kota_tujuan; ?> 
        </option>
    <?php endforeach; ?>
</select>



                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Biaya Tambahan (jika ada)</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="biaya_tambahan" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penerima</label>
                            <div class="col-sm-9">
                              <select class="js-example-basic-single form-select" style="width:100%" id="exampleSelectGenderr" name="id_penerima" required>
                         
                           <?php 
                  
                    foreach ($dt_penerima as $c):
                    ?> 
                       <option value="<?= $c->id_penerima; ?>"><?= $c->nama_penerima; ?> - <?= $c->alamat_penerima; ?></option>
                  <?php endforeach; ?>
                        </select>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                              <input type="text" name="ket" class="form-control" />
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Isi Paket</label>
                            <div class="col-sm-9">
                              <input type="text" name="isi_barang" class="form-control" required />
                            </div>
                          </div>
                        </div>
                       <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pembayaran</label>
                            <div class="col-sm-9">
                              <select class="form-select" name="pembayaran">
                                <option value="Lunas">Lunas</option>
                                <option value="Bayar Tujuan">Bayar Tujuan</option>
                             
                              </select>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Faktur (gunakan pemisah <code>&lt;br&gt;</code> jika lebih dari satu)</label>
                            <div class="col-sm-9">
                             <textarea class="form-control" name="no_faktur" rows="4"></textarea>
                            </div>
                          </div>
                        </div>

                      </div>
                         <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
          
            </div>
            <div id="myModal1" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModal1">&times;</span>
            <h2>Tambah Penerima</h2>
            
                    <?php  
             echo validation_errors();                       
    echo form_open('admin/tambah_penerima_bttb','class="form-sample"'); ?>
                      <div class="form-group">
                       
                        <label for="exampleInputUsername1">Nama Penerima</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="nama_penerima">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea class="form-control" name="alamat_penerima" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">No Telp</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="nomor_penerima">
                      </div>
                     
                     
                      <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     
                    </form>
        </div>
    </div>

    <!-- The Modal 2 -->
    <div id="myModal2" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModal2">&times;</span>
            <h2>Tambah Pelanggan</h2>
            <?php  
             echo validation_errors();                       
    echo form_open('admin/tambah_pelanggan_bttb','class="form-sample"'); ?>
                      <div class="form-group">
                       
                        <label for="exampleInputUsername1">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="nama_pelanggan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea class="form-control" name="alamat_pelanggan" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">No Telp</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="nomor_pelanggan">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Jenis Pelanggan</label>
                        <select class="form-select" id="exampleSelectGender" name="jenis_pelanggan">
                         
                          <option value="1">Pelanggan Umum</option>
                        </select>
                      </div>
                       <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-select" id="exampleSelectGender" name="status_pelanggan">
                          <option value="1">Aktif</option>
                          <option value="2">Tidak Aktif</option>
                        </select>
                      </div>
                     
                      <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     
                    </form>
        </div>
    </div>


    <script type="text/javascript">
      // Mendapatkan elemen modal dan tombol
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");

var openModalLink1 = document.getElementById("openModalLink1");
var openModalLink2 = document.getElementById("openModalLink2");

var closeModal1 = document.getElementById("closeModal1");
var closeModal2 = document.getElementById("closeModal2");

// Membuka Modal 1
openModalLink1.addEventListener("click", function(event) {
    event.preventDefault(); // Mencegah aksi default link
    modal1.style.display = "block"; // Menampilkan Modal 1
});

// Membuka Modal 2
openModalLink2.addEventListener("click", function(event) {
    event.preventDefault(); // Mencegah aksi default link
    modal2.style.display = "block"; // Menampilkan Modal 2
});

// Menutup Modal 1
closeModal1.onclick = function() {
    modal1.style.display = "none";
}

// Menutup Modal 2
closeModal2.onclick = function() {
    modal2.style.display = "none";
}

// Jika pengguna mengklik di luar modal, modal juga akan ditutup
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    } else if (event.target == modal2) {
        modal2.style.display = "none";
    }
}


    </script>
     
  <script type="text/javascript">
   $(document).ready(function() {
    $('#exampleSelectGesndeadrr').change(function() {
        var selectedOption = $(this).find('option:selected');
        var hargaPerColly = selectedOption.data('harga'); // Get the harga_per_colly from the selected option
        $('#harga').val(hargaPerColly); // Set the harga input field value
    });
});

  </script>