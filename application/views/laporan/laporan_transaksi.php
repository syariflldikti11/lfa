
   
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan transaksi.xls");
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
        

                     
            
                      <p align="center"><span class="style1">Laporan Transaksi </span><br />
                        Dari tanggal <?= date('d-m-Y', strtotime($dari)); ?> sampai tanggal <?= date('d-m-Y', strtotime($sampai)); ?><br />
                      </p>
                      <table width="100%" border="0">
                        <tr>
                          <td width="12%">Tanggal Laporan</td>
                          <td width="88%">: <?= date('d-m-Y'); ?></td>
                        </tr>
                    
                        <tr>
                          <td>Pendapatan</td>
                          <td>: <?php


$profit=$this->db->query("Select sum(total) as profit from transaksi where tgl_transaksi between '$dari' and '$sampai'");
 foreach ($profit->result() as $mt) :?>
<?= rupiah($mt->profit); ?>
 <?php endforeach; ?></td>
                        </tr>
                      </table>
<table border="1px">
                        <thead>
                        <tr>
                            <th>No</th>
                             <th>Status</th>
                            <th>No Trankasi</th>
                             <th>Tgl Transaksi</th>
                            <th>Pelanggan</th>
                            <th>Total</th>
                           <th>Pemabayaran</th>
                           
                          
                          
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                    $no=1;
                    foreach ($dt_transaksi as $d):
                    ?> 
                      
                          <tr>
                        <td><?= $no++; ?></td>
                        <td><?php if($d->status==2) :?>Selesai<?php endif; ?>
                        <?php if($d->status==1) :?>Diproses<?php endif; ?></td>
                        <td><?= $d->no_transaksi; ?></td>
                        <td><?= $d->tgl_transaksi; ?></td>
                        <td><?= $d->nama_pelanggan; ?> | <?= $d->no_hp; ?></td>
                         <td><?= rupiah($d->total) ?></td>
                       <td><?php if($d->status_payment==2) :?>Lunas<?php endif; ?>
                        <?php if($d->status_payment==1) :?>Belum Bayar<?php endif; ?></td>
                        
                       
                    </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    
          <?php
 exit ()
 ?>