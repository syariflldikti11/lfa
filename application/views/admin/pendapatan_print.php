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
<title>Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
 
  <!-- Theme style -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style type="text/css">
  .tables {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
 
}
.tables thead th {
    background-color: #000000;
    color: white;
    padding: 10px;
    border: 1px solid #dee2e6;
    text-align: left;
}

/* Sel tubuh */
.tables td {
    padding: 10px;
    border: 1px solid #dee2e6;
}
.style2 {font-size: 10}
</style>
<body>
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
<div class="wrapper">
  <!-- Main content -->
      <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
            
                <!-- /.col -->
              </div>
              <!-- info row -->
              
               <p class="lead"><strong><em>Total Pendapatan :
                   Rp. <?php $total = $this->db->query("SELECT SUM(total) AS total FROM transaksi WHERE year(tgl_transaksi)=2025")->row()->total;
echo rupiah($total);
                         ?>
                  </em></strong></p>
                  
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="tables" style="-webkit-print-color-adjust: exact; color-adjust: exact;" border="0px">
                    <thead>
                    <tr>
                     
                      <th>Nama Jasa</th>
                      <th>Total Pendapatan</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                    $no=1;
                    foreach ($a as $b):
                    ?> 
                    <tr>
                      
                      <td><strong>
                      <?= $b->nama_pengurusan; ?>
                        <?php $idp=$b->id_pengurusan; ?>                      
                        </strong></td>
                      <td><strong>
                      <?php $totalpd = $this->db->query("SELECT SUM(bpkb + stck + samsat_1 + by_proses + jasa + built_up + samsat_2 + pt_cv + non_npwp + bbn_kb + opsen_bbnkb + pkb + opsen_pkb + swdkllj + pnbpstnk + pnbptnkb) AS totalpd FROM detail_transaksi WHERE id_pengurusan='$idp'")->row()->totalpd;
                          echo rupiah($totalpd); ?>
                      </strong></td>
                    </tr>
                    <?php

$wilayah=$this->db->query("Select * from detail_pengurusan where  id_pengurusan='$idp'");
 foreach ($wilayah->result() as $yr) :?>

 
                    <tr>
                      <td><span class="w3-small w3-tiny style2"><em>Wilayah 
                      <?= $yr->wilayah; ?>
                      </em></span></td>
                      <td><span class="style2"></span></td>
                    </tr>
                    <?php endforeach; ?> 
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
       
              
             
            
 
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
