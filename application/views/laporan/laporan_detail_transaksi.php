
   
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
                      
                            <th colspan="7"><div align="center">Kondisi Tertentu</div></th>
                            <th colspan="29">Data Kendaraan</th>
                          </tr>
                          <tr>
                            <th>Built UP</th>
                            <th>Samsat_2</th>
                            <th>PT/CV</th>
                            <th>PT/CV NON NPWP</th>
                            <th>Perpanjangan STCK</th>
                            <th>Nopol Pilihan</th>
                            <th>Penalti Wilayah</th>
                            <th>No Faktur</th>
                            <th>Tgl Faktur</th>
                            <th>Nopol</th>
                            <th>Merk</th>
                            <th>Jenis</th>
                            <th>Tipe</th>
                            <th>Model</th>
                            <th>Tahun Buat</th>
                            <th>Tahun Rakit</th>
                            <th>Silinder</th>
                            <th>Warna</th>
                            <th>Bahan Bakar</th>
                            <th>No Rangka</th>
                            <th>No Mesin</th>
                            <th>Nama Pemilik 1</th>
                            <th>Nama Pemilik 2</th>
                            <th>Alamat Pemilik 1</th>
                            <th>Kec</th>
                            <th>Kab </th>
                            <th>Kode Pos</th>
                            <th>Pekerjaan</th>
                            <th>No KTP</th>
                            <th>ATPM</th>
                            <th>Jumlah Sumbu</th>
                            <th>Jumlah Roda</th>
                            <th>No SUT</th>
                            <th>No TPT</th>
                            <th>No PIB</th>
                            <th>No Form AB</th>
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
                        <td><?= rupiah($d->perpanjangan_stck); ?></td>
                        <td><?= rupiah($d->nopol_pilihan); ?></td>
                        <td><?= rupiah($d->penalti_wilayah); ?></td>
                        <td><?= $d->no_faktur; ?></td>
                        <td><?= $d->tgl_faktur; ?></td>
                        <td><?= $d->nopol; ?></td>
                        <td><?= $d->merk; ?></td>
                        <td><?= $d->jenis; ?></td>
                        <td><?= $d->tipe; ?></td>
                        <td><?= $d->model; ?></td>
                        <td><?= $d->tahun_buat; ?></td>
                        <td><?= $d->tahun_rakit; ?></td>
                        <td><?= $d->silinder; ?></td>
                        <td><?= $d->warna; ?></td>
                        <td><?= $d->bahan_bakar; ?></td>
                        <td><?= $d->no_rangka; ?></td>
                        <td><?= $d->no_mesin; ?></td>
                        <td><?= $d->pemilik_1; ?></td>
                        <td><?= $d->pemilik_2; ?></td>
                        <td><?= $d->alamat_pemilik_1; ?></td>
                        <td><?= $d->kec; ?></td>
                        <td><?= $d->kab; ?></td>
                        <td><?= $d->kode_pos; ?></td>
                        <td><?= $d->pekerjaan; ?></td>
                        <td><?= $d->no_ktp; ?></td>
                        <td><?= $d->atpm; ?></td>
                        <td><?= $d->jumlah_sumbu; ?></td>
                        <td><?= $d->jumlah_roda; ?></td>
                        <td><?= $d->no_sut; ?></td>
                        <td><?= $d->no_tpt; ?></td>
                        <td><?= $d->no_pib; ?></td>
                        <td><?= $d->no_form_ab; ?></td>
                        </tr>
                         
                  
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    
          <?php
 exit ()
 ?>