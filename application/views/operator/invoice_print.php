   <?php 

 
function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
 

?>
<?php 
 
  // FUNGSI TERBILANG OLEH : MALASNGODING.COM
  // WEBSITE : WWW.MALASNGODING.COM
  // AUTHOR : https://www.malasngoding.com/author/admin
 
 
  function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    $temp = "";
    if ($nilai < 12) {
      $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
      $temp = penyebut($nilai - 10). " Belas";
    } else if ($nilai < 100) {
      $temp = penyebut($nilai/10)." Puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
      $temp = " Seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
      $temp = penyebut($nilai/100) . " Ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
      $temp = " Seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
      $temp = penyebut($nilai/1000) . " Ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
      $temp = penyebut($nilai/1000000) . " Juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
      $temp = penyebut($nilai/1000000000) . " Milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
      $temp = penyebut($nilai/1000000000000) . " Trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
  }
 
  function terbilang($nilai) {
    if($nilai<0) {
      $hasil = "minus ". trim(penyebut($nilai));
    } else {
      $hasil = trim(penyebut($nilai));
    }         
    return $hasil;
  }
 
 
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assetsback/css/adminlte.min.css">
  <style type="text/css">
<!--
.style1 {font-size: small}
-->
  </style>
</head>
<body>
  <table width="100%" border="0">
  <tr>
    <td width="13%"><img src="<?= base_url(); ?>/assetsback/img/logo.jpg" width="150"></td>
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
<div class="wrapper">
  <!-- Main content -->
      <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
            
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                 Dari
                  <address>
                    <strong><?= $c->nama_perusahaan; ?></strong>
                   
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
            
<?php $bpkb = $this->db->query("SELECT SUM(bpkb) AS bpkb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->bpkb;

                         ?>
                         <?php $stck = $this->db->query("SELECT SUM(stck) AS stck FROM detail_transaksi WHERE id_transaksi='$id'")->row()->stck;

                         ?>
                         <?php $samsat_1 = $this->db->query("SELECT SUM(samsat_1) AS samsat_1 FROM detail_transaksi WHERE id_transaksi='$id'")->row()->samsat_1;

                         ?>
                         <?php $by_proses = $this->db->query("SELECT SUM(by_proses) AS by_proses FROM detail_transaksi  WHERE id_transaksi='$id'")->row()->by_proses;

                         ?>
                         <?php $jasa = $this->db->query("SELECT SUM(jasa) AS jasa FROM detail_transaksi WHERE id_transaksi='$id'")->row()->jasa;

                         ?>
                  <div class="table-responsive">
                    <table class="table">
                       <tr>
                        <th colspan="2">BIAYA UTAMA</th>
                      </tr>
                      <?php if($bpkb!=0) :?>
                      <tr>
                        <th>BPKB</th>
                        <td>
                        <?= rupiah($bpkb); ?>
</td>
                      </tr>
                    <?php endif;?>
                    <?php if($stck!=0) :?>
                      <tr>
                        <th>STCK</th>
                        <td><?= rupiah($stck); ?></td>
                      </tr>
                      <?php endif;?>
                      <?php if($samsat_1!=0) :?>
                      <tr>
                        <th>Samsat</th>
                        <td><?= rupiah($samsat_1); ?></td>
                      </tr>
                      <?php endif;?>
                        <?php if($by_proses!=0) :?>
                      <tr>
                        <th>By Proses</th>
                        <td><?= rupiah($by_proses); ?></td>
                      </tr>
                      <?php endif;?>
                      <?php if($jasa!=0) :?>
                        <tr>
                        <th>Jasa</th>
                        <td><?= rupiah($jasa); ?></td>
                      </tr>
                       <?php endif;?>
                     
                    </table>
                  </div>
                </div>
                <?php 
                $totaldua=0;
                ?>                
<?php $bbn_kb = $this->db->query("SELECT SUM(bbn_kb) AS bbn_kb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->bbn_kb;

                         ?>
                         <?php $pkb = $this->db->query("SELECT SUM(pkb) AS pkb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->pkb;

                         ?>
                         <?php $opsen_pkb = $this->db->query("SELECT SUM(opsen_pkb) AS opsen_pkb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->opsen_pkb;

                         ?>
                         <?php $swdkllj = $this->db->query("SELECT SUM(swdkllj) AS swdkllj FROM detail_transaksi WHERE id_transaksi='$id'")->row()->swdkllj;

                         ?>
                         <?php $pnbpstnk = $this->db->query("SELECT SUM(pnbpstnk) AS pnbpstnk FROM detail_transaksi WHERE id_transaksi='$id'")->row()->pnbpstnk;

                         ?>
                         <?php $pnbptnkb = $this->db->query("SELECT SUM(pnbptnkb) AS pnbptnkb FROM detail_transaksi WHERE id_transaksi='$id'")->row()->pnbptnkb;

                         ?>
                         <?php 
                $totaldua=0;
                $totaldua=$bbn_kb+$pkb+$opsen_pkb+$swdkllj+$pnbpstnk+$pnbptnkb;
                ?>
                 <?php if($totaldua!=0) :?>
                <div class="col-4">

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th colspan="2">NOTICE PAJAK</th>
                      </tr>
                      <?php if($bbn_kb!=0) :?>
                        <tr>
                        <th>BBN KB</th>
                        <td><?= rupiah($bbn_kb); ?></td>
                      </tr>
                          <?php endif;?>
                          <?php if($pkb!=0) :?>
                       <tr>
                        <th>PKB</th>
                        <td><?= rupiah($pkb); ?></td>
                      </tr>
                      <?php endif;?>
                      <?php if($opsen_pkb!=0) :?>
                       <tr>
                        <th>OPSEN PKB</th>
                        <td><?= rupiah($opsen_pkb); ?></td>
                      </tr>
                       <?php endif;?>
                        <?php if($swdkllj!=0) :?>
                      <tr>
                        <th>SWDKLLJ</th>
                        <td><?= rupiah($swdkllj); ?></td>
                      </tr>
                       <?php endif;?>
                        <?php if($pnbpstnk!=0) :?>
                      <tr>
                        <th>PNBP STNK</th>
                        <td><?= rupiah($pnbpstnk); ?></td>
                      </tr>
                      <?php endif;?>
                       <?php if($pnbptnkb!=0) :?>
                      <tr>
                        <th>PNBP TNKB</th>
                        <td><?= rupiah($pnbptnkb); ?></td>
                      </tr>
                        <?php endif;?>
                    </table>
                  </div>
                </div>
                 <?php endif;?>
                 <?php $built_up = $this->db->query("SELECT SUM(built_up) AS built_up FROM detail_transaksi WHERE id_transaksi='$id'")->row()->built_up;

                         ?>
                         <?php $samsat_2 = $this->db->query("SELECT SUM(samsat_2) AS samsat_2 FROM detail_transaksi WHERE id_transaksi='$id'")->row()->samsat_2;

                         ?>
                         <?php $pt_cv = $this->db->query("SELECT SUM(pt_cv) AS pt_cv FROM detail_transaksi WHERE id_transaksi='$id'")->row()->pt_cv;

                         ?>
                         <?php $non_npwp = $this->db->query("SELECT SUM(non_npwp) AS non_npwp FROM detail_transaksi WHERE id_transaksi='$id'")->row()->non_npwp;

                         ?>
                            <?php $perpanjangan_stck = $this->db->query("SELECT SUM(perpanjangan_stck) AS perpanjangan_stck FROM detail_transaksi WHERE id_transaksi='$id'")->row()->perpanjangan_stck;

                         ?>
                         <?php $nopol_pilihan = $this->db->query("SELECT SUM(nopol_pilihan) AS nopol_pilihan FROM detail_transaksi WHERE id_transaksi='$id'")->row()->nopol_pilihan;

                         ?>
                         <?php $penalti_wilayah = $this->db->query("SELECT SUM(penalti_wilayah) AS penalti_wilayah FROM detail_transaksi WHERE id_transaksi='$id'")->row()->penalti_wilayah;

                         ?>
                          <?php 
                $totaltiga=0;
                $totaltiga=$built_up+$samsat_2+$pt_cv+$non_npwp+$perpanjangan_stck+$nopol_pilihan+$penalti_wilayah;
                ?>
                 <?php if($totaltiga!=0) :?>
                 <div class="col-4">
                

                  <div class="table-responsive">
                    <table class="table">
                    
                        <tr>
                        <th colspan="2">TAMBAHAN KONDISI TERTENTU</th>
                      </tr>
                      <?php if($built_up!=0) :?>
                      <tr>
                        <th>BUILT UP</th>
                        <td><?= rupiah($built_up); ?></td>
                      </tr>
                       <?php endif;?>
                       <?php if($samsat_2!=0) :?>
                       <tr>
                        <th>Samsat</th>
                        <td><?= rupiah($samsat_2); ?></td>
                      </tr>
                       <?php endif;?>
                       <?php if($pt_cv!=0) :?>
                       <tr>
                        <th>PT/CV</th>
                        <td><?= rupiah($pt_cv); ?></td>
                      </tr>
                       <?php endif;?>
                       <?php if($non_npwp!=0) :?>
                      <tr>
                        <th>PT/CV Non NPWP</th>
                        <td><?= rupiah($non_npwp); ?></td>
                      </tr>
                       <?php endif;?>
                       <?php if($perpanjangan_stck!=0) :?>
                      <tr>
                        <th>Perpanjangan STCK</th>
                        <td><?= rupiah($perpanjangan_stck); ?></td>
                      </tr>
                       <?php endif;?>
                        <?php if($nopol_pilihan!=0) :?>
                      <tr>
                        <th>Nopol Pilihan</th>
                        <td><?= rupiah($nopol_pilihan); ?></td>
                      </tr>
                       <?php endif;?>
                        <?php if($penalti_wilayah!=0) :?>
                      <tr>
                        <th>Penalti Wilayah</th>
                        <td><?= rupiah($penalti_wilayah); ?></td>
                      </tr>
                       <?php endif;?>
                    </table>
                  </div>
                </div>
                 <?php endif;?>
                <!-- /.col -->
              </div>
               <p class="lead"><strong><em>Total yang harus dibayar :
                   Rp. <?= rupiah($a->total) ?>
                  </em></strong></p>
                    <p><em>Terbilang :
                   <?= terbilang($a->total) ?> Rupiah
                  </em></p>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                 
                 
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
    $teks=$a->id_transaksi; 
   $isi_teks1 = $teks;
                //Nama file yang akan disimpan pada folder temp 
                $namafile1 = $teks.".png";
                //Kualitas dari QRCode 
                $quality1 = 'H'; 
                //Ukuran besar QRCode
                $ukuran1 = 4; 
                $padding1 =0; 
 QRCode::png("https://birojasabanjarmasin.com/cekqr/view/$isi_teks1",$tempdir.$namafile1,$quality1,$ukuran1,$padding1);                ?>
   <img src="<?php echo base_url();?>temp/<?php echo $namafile1; ?>" width="100px">
 </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><?= $c->pimpinan; ?></td>
                    </tr>
        </table>
              <!-- this row will not appear when printing -->
             
  </div>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
