
   
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan detail transaksi.xls");
?>
 <?php 
 $dari=$_POST['dari'];
 $sampai=$_POST['sampai'];

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
        

                     
            
                      <p align="center"><span class="style1">Laporan Detail Transaksi </span><br />
                        Dari tanggal <?= date('d-m-Y', strtotime($dari)); ?> sampai tanggal <?= date('d-m-Y', strtotime($sampai)); ?><br />
                      </p>
                      <table width="100%" border="0">
                        <tr>
                          <td width="12%">Tanggal Laporan</td>
                          <td width="88%">: <?= date('d-m-Y'); ?></td>
                        </tr>
                    
                       
                      </table>
<table border="1px">
                        <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            
                            <th rowspan="2">No Transakasi</th>
                            <th rowspan="2">Tanggal</th>
                            <th rowspan="2">Pelanggan</th>
                            <th rowspan="2">Nama Jasa</th>
                            <th rowspan="2">Wilayah</th>
                            <th rowspan="2">BPKB</th>
                            <th rowspan="2">STCK</th>
                            <th rowspan="2">Samsat_1</th>
                            <th rowspan="2">By Proses</th>
                            <th rowspan="2">Jasa</th>
                            <th rowspan="2">BBN KB</th>
                            <th rowspan="2">OPSEN BBN KB</th>
                             <th rowspan="2">PKB</th>
                            <th rowspan="2">OPSEN PKB</th>
                            <th rowspan="2">SWDKLLJ</th>
                            <th rowspan="2">PNBP STNK</th>
                            <th rowspan="2">PNBP TNKB</th>
                      
                            <th colspan="4"><div align="center">Kondisi Tertentu</div></th>
                          </tr>
                          <tr>
                            <th>Built UP</th>
                            <th>Samsat_2</th>
                            <th>PT/CV</th>
                            <th>PT/CV NON NPWP</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                    $no=1;
                    foreach ($dt_detail_transaksi as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                        
                        <td><?= $d->no_transaksi; ?></td>
                        <td><?= $d->tgl_transaksi; ?></td>
                        <td><?= $d->nama_pelanggan; ?></td>
                        <td><?= $d->nama_pengurusan; ?></td>
                        <td><?= $d->wilayah; ?></td>
                        <td><?= rupiah($d->bpkb); ?></td>
                        <td><?= rupiah($d->stck); ?></td>
                        <td><?= rupiah($d->samsat_1); ?></td>
                        <td><?= rupiah($d->by_proses); ?></td>
                        <td><?= rupiah($d->jasa); ?></td>
                        <td><?= rupiah($d->bbn_kb); ?></td>
                        <td><?= rupiah($d->opsen_bbnkb); ?></td>
                        <td><?= rupiah($d->pkb); ?></td>
                        <td><?= rupiah($d->opsen_pkb); ?></td>
                        <td><?= rupiah($d->swdkllj); ?></td>
                        <td><?= rupiah($d->pnbpstnk); ?></td>
                        <td><?= rupiah($d->pnbptnkb); ?></td>
                        <td><?= rupiah($d->built_up); ?></td>
                        <td><?= rupiah($d->samsat_2); ?></td>
                        <td><?= rupiah($d->pt_cv); ?></td>
                        <td><?= rupiah($d->non_npwp); ?></td>
                    </tr>
                         
                  
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    
          <?php
 exit ()
 ?>