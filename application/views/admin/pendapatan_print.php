   <?php 


 $tahun=$_POST['tahun'];
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
<title>Pendapatan Print</title>

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
  
<div class="wrapper">
  <!-- Main content -->
  <center><H2>Pendapatan Tahun <?= $tahun; ?></H2></center>
      <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
            
                <!-- /.col -->
              </div>
              <!-- info row -->
              
              
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="tables" style="-webkit-print-color-adjust: exact; color-adjust: exact;" border="0px">
                    <thead>
                    <tr>
                     
                      <th>Nama Jasa</th>
                      <th>Rincian Pendapatan</th>
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
                      <?php $totalpd = $this->db->query("SELECT SUM(bpkb + stck + samsat_1 + by_proses + jasa + built_up + samsat_2 + pt_cv + non_npwp + bbn_kb + opsen_bbnkb + pkb + opsen_pkb + swdkllj + pnbpstnk + pnbptnkb) AS totalpd FROM detail_transaksi 
                      JOIN transaksi h ON h.id_transaksi = detail_transaksi.id_transaksi
       where year(h.tgl_transaksi)=$tahun and detail_transaksi.id_pengurusan='$idp' and h.status_payment=2

  ")->row()->totalpd;
                          echo rupiah($totalpd); ?>
                      </strong></td>
                    </tr>
                    <?php

$wilayah=$this->db->query("Select * from detail_pengurusan where  id_pengurusan='$idp'");
 foreach ($wilayah->result() as $yr) :?>

 
                    <tr>
                      <td><span class="w3-small w3-tiny style2"><em>Wilayah 
                      <?= $wil=$yr->wilayah; ?>
                      </em></span></td>
                      <td><span class="style2"><?php $totall = $this->db->query("SELECT SUM(bpkb + stck + samsat_1 + by_proses + jasa + built_up + samsat_2 + pt_cv + non_npwp + bbn_kb + opsen_bbnkb + pkb + opsen_pkb + swdkllj + pnbpstnk + pnbptnkb) AS totall FROM detail_transaksi  JOIN transaksi h ON h.id_transaksi = detail_transaksi.id_transaksi WHERE detail_transaksi.id_pengurusan='$idp' and wilayah='$wil' and h.status_payment=2 and year(h.tgl_transaksi)=$tahun")->row()->totall;
                          echo rupiah($totall); ?></span></td>
                    </tr>
                    <?php endforeach; ?> 
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
       
               <p class="lead"><strong><em>Total Pendapatan :
                   Rp. <?php $total = $this->db->query("SELECT SUM(total) AS total FROM transaksi WHERE year(tgl_transaksi)=$tahun and status_payment=2")->row()->total;
echo rupiah($total);
                         ?>
                  </em></strong></p>
                  
             
            
 
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
