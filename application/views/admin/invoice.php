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
                      <h4 class="card-title">Invoice</h4>
                     
                    </div>
                  </div>
                  <div class="card-body">
                

                 <div class="invoice p-3 mb-3">
              <!-- title row -->
            <table width="100%" border="0">
  <tr>
    <td width="13%"><img src="<?= base_url(); ?>/assetsback/img/logo.jpg" width="180"></td>
    <td width="72%"><div align="center"><b><font size="+5"><?= $c->nama_perusahaan; ?></b></font><br />
        
        <?= $c->alamat_1; ?>
        <br />
        <?= $c->alamat_2; ?> 
        No Telp. 
        <?= $c->no_hp; ?> 
       

    </div></td>
    <td width="15%">&nbsp;</td>
  </tr>
</table>
<div style='mso-element:para-border-div;border:none;border-top:solid windowtext 3.0pt;
padding:1.0pt 0cm 0cm 0cm'>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                 Dari
                  <address>
                    <strong><?= $c->nama_perusahaan; ?></strong><br>
                    
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                 Kepada
                  <address>
                    <strong><?= $a->nama_pelanggan; ?></strong><br>
                    <?= $a->alamat; ?><br>
                    
                    Hp:    <?= $a->no_hp; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice <?= $a->invoice ?>/BJ-LFA/<?= date('m'); ?>/<?= date('Y'); ?></b>
                  <br>
                  <b>Status:</b> <?php if($a->status_payment==2)
                   {
                    echo 'LUNAS';
                  }
                     else 
                     {
                      echo 'BELUM BAYAR';
                       }
                       ?><br>
                  <b>No Transaksi:</b> <?= $a->no_transaksi; ?><br>
                  <b>Tgl Transaksi:</b> <?= date('d-m-Y', strtotime($a->tgl_transaksi)); ?><br>
                  <b>Tgl Invoice:</b> <?= date('d-m-Y'); ?>
                </div>
                <!-- /.col -->
              </div>
                 Dengan ini kami beritahukan seluruh biaya kepengurusan pada <?= $c->nama_perusahaan; ?> dengan rincian sebagai berikut :
                  
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                    
                      <th>Nama Jasa</th>
                      <th>Wilayah</th>
                      <th>Pemilik</th>
                      <th>Merk/Type</th>
                      <th>Jenis/Model</th>
                      <th>Nopol</th>
                      <th>No Rangka</th>
                      <th>No Mesin</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                    $no=1;
                    foreach ($dt_detail_transaksi as $b):
                    ?> 
                    <tr>
                     
                      <td><?= $b->nama_pengurusan; ?></td>
                      <td><?= $b->wilayah; ?></td>
                      <td><?= $b->pemilik_1; ?></td>
                      <td><?= $b->merk; ?>/<?= $b->tipe; ?></td>
                      <td><?= $b->jenis; ?>/<?= $b->model; ?></td>
                      <td><?= $b->nopol; ?></td>
                      <td><?= $b->no_rangka; ?></td>
                      <td><?= $b->no_mesin; ?></td>
                    </tr> <?php endforeach; ?>
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
  Dengan rincian biaya sebagai berikut :
              <div class="row">
                <!-- accepted payments column -->
              
                <!-- /.col -->
                 <div class="col-4">
            

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>BPKB</th>
                        <td><?php $bpkb = $this->db->query("SELECT SUM(bpkb) AS bpkb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->bpkb;
echo rupiah($bpkb);
                         ?>
</td>
                      </tr>
                      <tr>
                        <th>STCK</th>
                        <td><?php $stck = $this->db->query("SELECT SUM(stck) AS stck FROM detail_transaksi WHERE id_transaksi='$id'")->row()->stck;
echo rupiah($stck);
                         ?></td>
                      </tr>
                      <tr>
                        <th>Samsat</th>
                        <td><?php $samsat_1 = $this->db->query("SELECT SUM(samsat_1) AS samsat_1 FROM detail_transaksi WHERE id_transaksi='$id'")->row()->samsat_1;
echo rupiah($samsat_1);
                         ?></td>
                      </tr>
                      <tr>
                        <th>By Proses</th>
                        <td><?php $by_proses = $this->db->query("SELECT SUM(by_proses) AS by_proses FROM detail_transaksi  WHERE id_transaksi='$id'")->row()->by_proses;
echo rupiah($by_proses);
                         ?></td>
                      </tr>
                        <tr>
                        <th>Jasa</th>
                        <td><?php $jasa = $this->db->query("SELECT SUM(jasa) AS jasa FROM detail_transaksi WHERE id_transaksi='$id'")->row()->jasa;
echo rupiah($jasa);
                         ?></td>
                      </tr>
                     
                    </table>
                  </div>
                </div>
                <div class="col-4">
                

                  <div class="table-responsive">
                    <table class="table">
                        <tr>
                        <th>BBN KB</th>
                        <td><?php $bbn_kb = $this->db->query("SELECT SUM(bbn_kb) AS bbn_kb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->bbn_kb;
echo rupiah($bbn_kb);
                         ?></td>
                      </tr>
                       <tr>
                        <th>PKB</th>
                        <td><?php $pkb = $this->db->query("SELECT SUM(pkb) AS pkb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->pkb;
echo rupiah($pkb);
                         ?></td>
                      </tr>
                       <tr>
                        <th>OPSEN PKB</th>
                        <td><?php $opsen_pkb = $this->db->query("SELECT SUM(opsen_pkb) AS opsen_pkb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->opsen_pkb;
echo rupiah($opsen_pkb);
                         ?></td>
                      </tr>
                      <tr>
                        <th>SWDKLLJ</th>
                        <td><?php $swdkllj = $this->db->query("SELECT SUM(swdkllj) AS swdkllj FROM detail_transaksi WHERE id_transaksi='$id'")->row()->swdkllj;
echo rupiah($swdkllj);
                         ?></td>
                      </tr>
                      <tr>
                        <th>PNBP STNK</th>
                        <td><?php $pnbpstnk = $this->db->query("SELECT SUM(pnbpstnk) AS pnbpstnk FROM detail_transaksi WHERE id_transaksi='$id'")->row()->pnbpstnk;
echo rupiah($pnbpstnk);
                         ?></td>
                      </tr>
                      <tr>
                        <th>PNBP TNKB</th>
                        <td><?php $pnbptnkb = $this->db->query("SELECT SUM(pnbptnkb) AS pnbptnkb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->pnbptnkb;
echo rupiah($pnbptnkb);
                         ?></td>
                      </tr>
                       
                    </table>
                  </div>
                </div>
                 <div class="col-4">
                

                  <div class="table-responsive">
                    <table class="table">
                    
                        <tr>
                        <th colspan="2">Tambahan Kondisi Tertentu</th>
                      </tr>
                      <tr>
                        <th>BUILT UP</th>
                        <td><?php $built_up = $this->db->query("SELECT SUM(built_up) AS built_up FROM detail_transaksi WHERE id_transaksi='$id'")->row()->built_up;
echo rupiah($built_up);
                         ?></td>
                      </tr>
                       <tr>
                        <th>Samsat</th>
                        <td><?php $samsat_2 = $this->db->query("SELECT SUM(samsat_2) AS samsat_2 FROM detail_transaksi WHERE id_transaksi='$id'")->row()->samsat_2;
echo rupiah($samsat_2);
                         ?></td>
                      </tr>
                       <tr>
                        <th>PT/CV</th>
                        <td><?php $pt_cv = $this->db->query("SELECT SUM(pt_cv) AS pt_cv FROM detail_transaksi WHERE id_transaksi='$id'")->row()->pt_cv;
echo rupiah($pt_cv);
                         ?></td>
                      </tr>
                      <tr>
                        <th>PT/CV Non NPWP</th>
                        <td><?php $non_npwp = $this->db->query("SELECT SUM(non_npwp) AS non_npwp FROM detail_transaksi WHERE id_transaksi='$id'")->row()->non_npwp;
echo rupiah($non_npwp);
                         ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead"><strong><em>Total yang harus dibayar :
                   Rp. <?= rupiah($a->total) ?>
                  </em></strong></p>
                 
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Dana tersebut mohon ditransfer ke rekening di bawah ini
                  </p>
                  <p><b>
                    <?= $c->bank; ?>
                    </b> <br />
                    <b>A/C No. 
                    <?= $c->no_rekening; ?>
                    </b> <br />
                    <b>Atas Nama 
                    <?= $c->nama_rekening; ?>
                  </b></p>
                  
                </div>
              </div>
              <!-- /.row -->
               Demikian pemberitahuan ini kami sampaikan, atas perhatian dan kerja samanya diucapkan terimakasih
               <br>
               <br />
 <table width="100%" border="0">
                    <tr>
                      <td width="77%">&nbsp;</td>
                      <td width="23%">Banjarmasin
                      <?= date('d-m-Y'); ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Hormat Kami</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><?= $c->nama_perusahaan; ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td> <?php
   include "phpqrcode/qrlib.php";

   $no=1;
                                           $tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);
    $teks=$a->no_transaksi; 
   $isi_teks1 = $teks;
                //Nama file yang akan disimpan pada folder temp 
                $namafile1 = $teks.".png";
                //Kualitas dari QRCode 
                $quality1 = 'H'; 
                //Ukuran besar QRCode
                $ukuran1 = 4; 
                $padding1 =0; 
 QRCode::png("https://siwalipoliban.com/cekqr/$isi_teks1",$tempdir.$namafile1,$quality1,$ukuran1,$padding1);                ?>
   <img src="<?php echo base_url();?>temp/<?php echo $namafile1; ?>" width="100px">
 </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><?= $c->pimpinan; ?></td>
                    </tr>
                  </table>
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?= base_url('admin/invoice_print/'.$a->id_transaksi); ?>" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
                 
                </div>
              </div>
            </div>
                  </div>
                </div>
              </div>

            
         
            </div>
          </div>
</div>


