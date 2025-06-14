   <?php 

 
function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
 

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Receipt Print</title>

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
           <center>   <h2>SURAT TANDA TERIMA DOKUMEN<br />
           </h2> </center> 
           <center>
             <p><u>Nomor : 
             <?= $a->no_tanda_terima; ?>
             /TT-BJ-LFA/
             <?= date('m'); ?>
             /
             <?= date('Y'); ?>
             </u>             </p>
             <p>&nbsp;</p>
        </center>
           <p>
             
                 Sehubungan dengan dilakukannya transaksi pada 
                 <?= $c->nama_perusahaan; ?> dengan no transaksi <?= $a->no_transaksi; ?> pada tanggal <?= date('d-m-Y', strtotime($a->tgl_transaksi)); ?> dengan rincian sebagai berikut :
                  
              <!-- /.row -->

              <!-- Table row -->
  <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                     
                      <th>Nama Jasa</th>
                     
                      <th>Pemilik</th>
                      <th>Merk/Type</th>
                      <th>Jenis/Model</th>
                      <th>Nopol</th>
                      <th>No Rangka</th>
                      <th>No Mesin</th>
                      <th>Dokumen</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                    $no=1;
                    foreach ($dt_detail_tanda_terima as $b):
                    ?> 
                    <tr>
                      
                      <td><?= $b->nama_pengurusan; ?></td>
                     
                      <td><?= $b->pemilik_1; ?></td>
                      <td><?= $b->merk; ?>/<?= $b->tipe; ?></td>
                      <td><?= $b->jenis; ?>/<?= $b->model; ?></td>
                      <td><?= $b->nopol; ?></td>
                      <td><?= $b->no_rangka; ?></td>
                      <td><?= $b->no_mesin; ?></td>
                      <td><?= $b->dokumen; ?></td>
                    </tr> <?php endforeach; ?>
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <p>
                <!-- /.row -->
                Telah diterima dokumen sesuai yang tertera pada rincian di atas <br />
                
                
                <!-- /.row -->
              Demikian surat tanda terima dokumen ini menjadi bukti yang sah secara hukum dan bisa digunakan sebagaimana mestinya</p>
              <p align="right">Banjarmasin
                <?= date('d-m-Y'); ?>
                <br>
                <br />
                           </p>
<table width="100%" border="0">
                    <tr>
                      <td width="40%">&nbsp;</td>
                      <td width="20%">&nbsp;</td>
                      <td width="40%">&nbsp;</td>
      </tr>
                    <tr>
                      <td><div align="right">Yang Menerima</div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">Yang Menyerahkan</div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td></td>
                      <td> </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td></td>
                      <td></td>
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
