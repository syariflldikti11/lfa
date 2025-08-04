
   

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
        

                     
            
                      <p align="center"><span class="style1">Laporan Kepuasan Pelanggan </span><br />
                       Tahun <?= $tahun; ?><br />
                      </p>
                      <table width="100%" border="0">
                        <tr>
                          <td width="12%">Tanggal Laporan</td>
                          <td width="88%">: <?= date('d-m-Y'); ?></td>
                        </tr>
                    
                        <tr>
                          <td>Rata-rata</td>
                          <td>: <?php


$profit=$this->db->query("SELECT AVG(nilai) as rata from transaksi where YEAR(tgl_transaksi)=$tahun and status=2");
 foreach ($profit->result() as $mt) :?>
<?= rupiah($mt->rata); ?>
 <?php endforeach; ?></td>
                        </tr>
                      </table>
<table  class="tables" style="-webkit-print-color-adjust: exact; color-adjust: exact;" border="0px">
                        <thead>
                        <tr>
                            <th>No</th>
                             <th>Status</th>
                            <th>No Trankasi</th>
                             <th>Tgl Transaksi</th>
                            <th>Pelanggan</th>
                            <th>Total</th>
                           <th>Pembayaran</th>
                           <th>Nilai</th>
                           <th>Catatan</th>
                           
                          
                          
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                    $no=1;
                    foreach ($dt_kepuasan as $d):
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
                         <td><?= $d->nilai; ?></td>
                          <td><?= $d->catatan_pelanggan; ?></td>
                       
                    </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    
        <script>
  window.addEventListener("load", window.print());
</script>