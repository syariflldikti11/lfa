   
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
                      <h4 class="card-title">Detail Transaksi <?= $a->no_transaksi; ?></h4>
                      <a
                        class="btn btn-primary btn-round ms-auto"
                   href="<?php echo base_url('admin/tambah_detail_transaksi');?>" 
                      >
                        <i class="fa fa-plus"></i>
                        Tambah
                      </a>

                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="basic-datatables"
                        class="table table-striped"
                      >
                        <thead class="table-dark">
                        
                          <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama Jasa</th>
                            <th rowspan="2">Wilayah</th>
                            <th rowspan="2">BPKB</th>
                            <th rowspan="2">STCK</th>
                            <th rowspan="2">Samsat_1</th>
                            <th rowspan="2">By Proses</th>
                            <th rowspan="2">Jasa</th>
                            <th colspan="5"><div align="center">Kondisi Tertentu</div></th>
                            <th rowspan="2">Opsi</th>
                          </tr>
                          <tr>
                            <th>Built UP</th>
                            <th>Samsat_2</th>
                            <th>PT/CV</th>
                            <th colspan="2">PT/CV NON NPWP</th>
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                    $no=1;
                    foreach ($dt_detail_transaksi as $d):
                    ?> 
                          <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->nama_pengurusan; ?></td>
                        <td><?= $d->wilayah; ?></td>
                        <td><?= rupiah($d->bpkb); ?></td>
                        <td><?= rupiah($d->stck); ?></td>
                        <td><?= rupiah($d->samsat_1); ?></td>
                        <td><?= rupiah($d->by_proses); ?></td>
                        <td><?= rupiah($d->jasa); ?></td>
                        <td><?= rupiah($d->built_up); ?></td>
                        <td><?= rupiah($d->samsat_2); ?></td>
                        <td><?= rupiah($d->pt_cv); ?></td>
                        <td colspan="2"><?= rupiah($d->non_npwp); ?></td>
                        
                        <td><div align="center"><a  class="btn btn-danger btn-sm" data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('admin/delete_detail_transaksi/'.$d->id_detail_transaksi.'/'.$d->id_transaksi);?>" 
> <i class="fa fa-trash"></i></a> <a class="btn btn-primary btn-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-bs-toggle="modal" data-bs-target="#edit"   
          data-id="<?= $d->id_detail_transaksi ?>"
          data-wilayah="<?= $d->wilayah ?>"
          data-bpkb="<?= $d->bpkb ?>"
          data-stck="<?= $d->stck ?>"
          data-samsat_1="<?= $d->samsat_1 ?>"
          data-by_proses="<?= $d->by_proses ?>"
          data-jasa="<?= $d->jasa ?>"
          data-built_up="<?= $d->built_up ?>"
          data-samsat_2="<?= $d->samsat_2 ?>"
          data-pt_cv="<?= $d->pt_cv ?>"
          data-non_npwp="<?= $d->non_npwp ?>"
          > 
 <i class="fa fa-edit"></i></a></div></td>
                    </tr>
                   <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            
         
            </div>
          </div>
        </div>


