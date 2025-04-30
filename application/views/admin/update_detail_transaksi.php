  
   <?php 

 
function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
 

?>
  <div class="container">
          <div class="page-inner">
               <div class="page-header">
          <a href="<?php echo base_url('admin/detail_transaksi/'.$d->id_transaksi);?>"class="btn btn-dark me-2">Kembali</a>
             
            </div>
         
             <div class="row">

                <div class="col-6">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Biaya Pengurusan </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                 <?php  
             echo validation_errors();                       
    echo form_open('admin/update_detail_transaksi','class="form-horizontal"'); ?>
                <div class="card-body">
                 
                        <div class="form-group">
  <input type="hidden" class="form-control"  name="id_transaksi" value="<?= $d->id_transaksi; ?>">
  <input type="hidden" class="form-control"  name="id_detail_transaksi" value="<?= $d->id_detail_transaksi; ?>">
    <input type="hidden" class="form-control" name="old_wilayah" value="<?= $d->wilayah; ?>"> 
    <input type="hidden" class="form-control" name="old_id_pengurusan" value="<?= $d->id_pengurusan; ?>"> 
    <label for="exampleInputEmail1">Jasa Pengurusan</label>
  <select class="js-example-basic-single form-select" style="width:100%" id="category" name="id_pengurusan" >
                           <option value="old">Pilih Jasa Pengurusan</option>
                           <?php 
                  
                    foreach ($dt_pengurusan as $a):
                    ?> 
                       <option value="<?= $a->id_pengurusan; ?>" ><?= $a->nama_pengurusan; ?></option>
                  <?php endforeach; ?>
                        </select>
    
  </div>
   
                                    <div class="form-group">

    <label for="exampleInputEmail1">Wilayah</label>
   <select class="js-example-basic-single form-select"  style="width:100%" id="sub_category" name="wilayah"  >
                                        <option value="old">No Selected</option>
 
                                    </select>
    
  </div>
                  <div class="form-group">

    <label for="exampleInputEmail1">BPKB</label>
    <input type="number" class="form-control"  value="<?= $d->bpkb; ?>" name="bpkb" id="bpkb"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">STCK</label>
    <input type="number" class="form-control"  value="<?= $d->stck; ?>" name="stck" id="stck"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Samsat_1</label>
    <input type="number" class="form-control"  value="<?= $d->samsat_1; ?>" name="samsat_1" id="samsat_1"  >
    
  </div>
    <div class="form-group">

    <label for="exampleInputEmail1">By Proses</label>
    <input type="number" class="form-control"  value="<?= $d->by_proses; ?>" name="by_proses" id="by_proses"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Jasa</label>
    <input type="number" class="form-control"  value="<?= $d->jasa; ?>" name="jasa" id="jasa"  >
    
  </div>
         
                
                
                
                
                </div>
                <!-- /.card-body -->
               
                <!-- /.card-footer -->
             
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Notice Pajak</h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
               
                <div class="card-body">
                  <div class="form-group">

    <label for="exampleInputEmail1">BBN-KB</label>
    <input type="number" class="form-control"  value="<?= $d->bbn_kb; ?>" name="bbn_kb" id="bbn_kb"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">OPSEN BBN-KB</label>
    <input type="number" class="form-control"  value="<?= $d->opsen_bbnkb; ?>" name="opsen_bbnkb" id="opsen_bbnkb"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PKB</label>
    <input type="number" class="form-control"  value="<?= $d->pkb; ?>" name="pkb" id="pkb"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">OPSEN PKB</label>
    <input type="number" class="form-control"  value="<?= $d->opsen_pkb; ?>" name="opsen_pkb" id="opsen_pkb"  >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">SWDKLLJ</label>
    <input type="number" class="form-control"  value="<?= $d->swdkllj; ?>" name="swdkllj" id="swdkllj"  >
    
  </div>
            <div class="form-group">

    <label for="exampleInputEmail1">OBIAYA PNBP STNK</label>
    <input type="number" class="form-control"  value="<?= $d->pnbpstnk; ?>" name="pnbpstnk" id="pnbpstnk"  >
    
  </div>     
   <div class="form-group">

    <label for="exampleInputEmail1">OBIAYA PNBP TNKB</label>
    <input type="number" class="form-control"  value="<?= $d->pnbptnkb; ?>" name="pnbptnkb" id="pnbptnkb"  >
    
  </div>     
                 
                
                
                
                
                </div>
                
                <!-- /.card-body -->
              
            </div>
         
              <!-- /.card-body -->
            </div>

   <div class="col-6">
   <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambahan untuk Kondisi Tertentu</h3><font color="red">(Silahkan dihapus jika tidak dibutuhkan)</font>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
               
                <div class="card-body">
                 
                
                   
   <div class="form-group">

    <label for="exampleInputEmail1">Built UP</label>
    <input type="number" class="form-control"  value="<?= $d->built_up; ?>" name="built_up" id="built_up"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Samsat_2</label>
    <input type="number" class="form-control"  value="<?= $d->samsat_2; ?>" name="samsat_2" id="samsat_2"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PT/CV</label>
    <input type="number" class="form-control"  value="<?= $d->pt_cv; ?>" name="pt_cv" id="pt_cv"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PT/CV NON NPWP</label>
    <input type="number" class="form-control"  value="<?= $d->non_npwp; ?>" name="non_npwp" id="non_npwp"  >
    
  </div>
          
                 
                  
                
                
                
                
                </div>
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
              
            </div>



<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kendaraan</h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
               
                <div class="card-body">
                  <div class="form-group">

    <label for="exampleInputEmail1">No Faktur</label>
    <input type="text" class="form-control"  value="<?= $d->no_faktur; ?>" name="no_faktur" id="no_faktur"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Tgl Faktur</label>
    <input type="date" class="form-control"  value="<?= $d->tgl_faktur; ?>" name="tgl_faktur" id="tgl_faktur"  >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Nopol</label>
    <input type="text" class="form-control"  value="<?= $d->nopol; ?>" name="nopol" id="nopol"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Merk</label>
    <input type="text" class="form-control"  value="<?= $d->merk; ?>" name="merk" id="merk"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Jenis</label>
    <input type="text" class="form-control"  value="<?= $d->jenis; ?>" name="jenis" id="jenis"  >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Tipe</label>
    <input type="text" class="form-control"  value="<?= $d->tipe; ?>" name="tipe" id="tipe"  >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Model</label>
    <input type="text" class="form-control"  value="<?= $d->model; ?>" name="model" >
    
  </div>
            <div class="form-group">

    <label for="exampleInputEmail1">Tahun Buat</label>
    <input type="number" class="form-control"  value="<?= $d->tahun_buat; ?>" name="tahun_buat" id="tahun_buat"  >
    
  </div>     
   <div class="form-group">

    <label for="exampleInputEmail1">Tahun Rakit</label>
    <input type="number" class="form-control"  value="<?= $d->tahun_rakit; ?>" name="tahun_rakit" id="tahun_rakit"  >
    
  </div> 
  <div class="form-group">

    <label for="exampleInputEmail1">Silinder</label>
    <input type="number" class="form-control"  value="<?= $d->silinder; ?>" name="silinder" id="silinder"  >
    
  </div> 
  <div class="form-group">

    <label for="exampleInputEmail1">Warna</label>
    <input type="text" class="form-control"  value="<?= $d->warna; ?>" name="warna" id="warna"  >
    
  </div>   
    <div class="form-group">

    <label for="exampleInputEmail1">Bahan Bakar</label>
    <input type="text" class="form-control"  value="<?= $d->bahan_bakar; ?>" name="bahan_bakar" id="bahan_bakar"  >
    
  </div>     
    <div class="form-group">

    <label for="exampleInputEmail1">No Rangka</label>
    <input type="text" class="form-control"  value="<?= $d->no_rangka; ?>" name="no_rangka" id="no_rangka"  >
    
  </div>   
    <div class="form-group">

    <label for="exampleInputEmail1">No Mesin</label>
    <input type="text" class="form-control"  value="<?= $d->no_mesin; ?>" name="no_mesin" id="no_mesin"  >
    
  </div>   
  <div class="form-group">

    <label for="exampleInputEmail1">Nama Pemilik 1</label>
    <input type="text" class="form-control"  value="<?= $d->pemilik_1; ?>" name="pemilik_1" id="pemilik_1"  >
    
  </div>  
   <div class="form-group">

    <label for="exampleInputEmail1">Nama Pemilik 2</label>
    <input type="text" class="form-control"  value="<?= $d->pemilik_2; ?>" name="pemilik_2" id="pemilik_2"  >
    
  </div>  
   <div class="form-group">

    <label for="exampleInputEmail1">Alamat Pemilik 1</label>
    <input type="text" class="form-control"  value="<?= $d->alamat_pemilik_1; ?>" name="alamat_pemilik_1" id="pemilik_1"  >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kec</label>
    <input type="text" class="form-control"  value="<?= $d->kec; ?>" name="kec" id="kec"  >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kab</label>
    <input type="text" class="form-control"  value="<?= $d->kab; ?>" name="kab" id="kab"  >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kode Pos</label>
    <input type="text" class="form-control"  value="<?= $d->kode_pos; ?>" name="kode_pos" id="kode_pos"  >
    
  </div> 
  <div class="form-group">

    <label for="exampleInputEmail1">Pekerjaan</label>
    <input type="text" class="form-control"  value="<?= $d->pekerjaan; ?>" name="pekerjaan"   >
    
  </div>
                 
        <div class="form-group">

    <label for="exampleInputEmail1">No KTP</label>
    <input type="text" class="form-control"  value="<?= $d->no_ktp; ?>" name="no_ktp"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">ATPM</label>
    <input type="text" class="form-control"  value="<?= $d->atpm; ?>" name="atpm"   >
    
  </div>
  
  <div class="form-group">

    <label for="exampleInputEmail1">Jumlah Sumbu</label>
    <input type="number" class="form-control"  value="<?= $d->jumlah_sumbu; ?>" name="jumlah_sumbu"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Jumlah Roda</label>
    <input type="number" class="form-control"  value="<?= $d->jumlah_roda; ?>" name="jumlah_roda"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">No SUT</label>
    <input type="text" class="form-control"  value="<?= $d->no_sut; ?>" name="no_sut"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">No TPT</label>
    <input type="text" class="form-control"  value="<?= $d->no_tpt; ?>" name="no_tpt"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">No PIB</label>
    <input type="text" class="form-control"  value="<?= $d->no_pib; ?>" name="no_pib"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">No Form AB</label>
    <input type="text" class="form-control"  value="<?= $d->no_form_ab; ?>" name="no_form_ab"   >
    
  </div>
       
                
                
                
                </div>
                <div class="card-action">
                     <button type="submit" name="submit" class="btn btn-primary me-2">Update</button>
                   
                  </div>
                <!-- /.card-body -->
              
            </div>
              <!-- /.card-body -->
            </div>
               
              <!-- /.card-body -->
             </form>
</div>
</div>
          
 <script type="text/javascript">
    $(document).ready(function(){
        $('#category').change(function(){ 
            var id = $(this).val();
            $.ajax({
                url : "<?php echo site_url('admin/get_sub_tarif_pengurusan');?>",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                    var html = '<option value="">Pilih</option>';  // Add "Pilih" option

                    var i;
                    for(i = 0; i < data.length; i++) {
                        html += '<option value="'+data[i].wilayah+
                                '" data-by_proses="'+data[i].by_proses+
                                '" data-bpkb="'+data[i].bpkb+
                                '" data-stck="'+data[i].stck+
                                '" data-jasa="'+data[i].jasa+
                                '" data-samsat_1="'+data[i].samsat_1+
                                '" data-built_up="'+data[i].built_up+
                                '" data-samsat_2="'+data[i].samsat_2+
                                '" data-pt_cv="'+data[i].pt_cv+
                                '" data-non_npwp="'+data[i].non_npwp+
                                '">'+data[i].wilayah+'</option>';
                    }

                    $('#sub_category').html(html);
                }
            });
            return false;
        });

        $('#sub_category').change(function(){
            var selectedOption = $(this).find('option:selected');
            var by_proses = selectedOption.data('by_proses');
            var bpkb = selectedOption.data('bpkb');
            var jasa = selectedOption.data('jasa');
            var stck = selectedOption.data('stck');
            var samsat_1 = selectedOption.data('samsat_1');
            var samsat_2 = selectedOption.data('samsat_2');
            var built_up = selectedOption.data('built_up');
            var pt_cv = selectedOption.data('pt_cv');
            var non_npwp = selectedOption.data('non_npwp');
            $('#by_proses').val(by_proses);
            $('#bpkb').val(bpkb);
            $('#jasa').val(jasa);
            $('#stck').val(stck);
            $('#samsat_1').val(samsat_1);
            $('#samsat_2').val(samsat_2);
            $('#built_up').val(built_up);
            $('#pt_cv').val(pt_cv);
            $('#non_npwp').val(non_npwp);
        });
    });
</script>
