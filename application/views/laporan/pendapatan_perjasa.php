
   

 <?php 


 $tahun=$_POST['tahun'];
function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}
 

?>
 <style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
 </style>
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
        

                     
            
                      <p align="center"><span class="style1">Laporan Data Pendapatan Per Jasa Tahun <?= $tahun; ?> </span>
                      </p>
                      <table width="100%" border="0">
                        <tr>
                          <td width="12%">Tanggal Laporan</td>
                          <td width="88%">: <?= date('d-m-Y'); ?></td>
                        </tr>
                    
                      </table>
<table  class="tables" style="-webkit-print-color-adjust: exact; color-adjust: exact;" border="0px">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jasa</th>
                            <th>Total</th>
                           
                           
                          
                          
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                    $no=1;
                    foreach ($dt_pendapatan as $d):
                    ?> 
                      
                          <tr>
                       <td><?= $no++; ?></td>
                        <td><?= $d->nama_pengurusan; ?></td>
                        <td><?= rupiah($d->total); ?></td>
                    
                       
                    </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    
        <script>
  window.addEventListener("load", window.print());
</script>