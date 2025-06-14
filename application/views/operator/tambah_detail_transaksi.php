  
   <?php 

 
function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
 

?>
  <div class="container">
          <div class="page-inner">
          <div class="page-header">
          <a href="<?php echo base_url('operator/detail_transaksi/'.$id);?>"class="btn btn-dark me-2">Kembali</a>
             
            </div>
             <div class="row">
                <div class="col-6">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Biaya Pengurusan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                 <?php  
             echo validation_errors();                       
    echo form_open('admin/tambah_detail_transaksi','class="form-horizontal"'); ?>
                <div class="card-body">
                 
                        <div class="form-group">
  <input type="hidden" class="form-control"  name="id_transaksi" value="<?= $id; ?>">
    <label for="exampleInputEmail1">Jasa Pengurusan</label>
  <select class="js-example-basic-single form-select" style="width:100%" id="category" name="id_pengurusan" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')">
                           <option value="">Pilih Jasa Pengurusan</option>
                           <?php 
                  
                    foreach ($dt_pengurusan as $a):
                    ?> 
                       <option value="<?= $a->id_pengurusan; ?>"><?= $a->nama_pengurusan; ?></option>
                  <?php endforeach; ?>
                        </select>
    
  </div>
   
                                    <div class="form-group">

    <label for="exampleInputEmail1">Wilayah</label>
   <select class="js-example-basic-single form-select"  style="width:100%" id="sub_category" name="wilayah" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')" >
                                        <option value="">No Selected</option>
 
                                    </select>
    
  </div>
                  <div class="form-group">

    <label for="exampleInputEmail1">BPKB</label>
    <input type="number" class="form-control"  name="bpkb" id="bpkb"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">STCK</label>
    <input type="number" class="form-control"  name="stck" id="stck"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Samsat_1</label>
    <input type="number" class="form-control"  name="samsat_1" id="samsat_1"  >
    
  </div>
    <div class="form-group">

    <label for="exampleInputEmail1">By Proses</label>
    <input type="number" class="form-control"  name="by_proses" id="by_proses"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Jasa</label>
    <input type="number" class="form-control"  name="jasa" id="jasa"  >
    
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
    <input type="number" class="form-control"  name="bbn_kb" id="bbn_kb"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">OPSEN BBN-KB</label>
    <input type="number" class="form-control"  name="opsen_bbnkb" id="opsen_bbnkb"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PKB</label>
    <input type="number" class="form-control"  name="pkb" id="pkb"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">OPSEN PKB</label>
    <input type="number" class="form-control"  name="opsen_pkb" id="opsen_pkb"  >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">SWDKLLJ</label>
    <input type="number" class="form-control"  name="swdkllj" id="swdkllj"  >
    
  </div>
            <div class="form-group">

    <label for="exampleInputEmail1">BIAYA PNBP STNK</label>
    <input type="number" class="form-control"  name="pnbpstnk" id="pnbpstnk"  >
    
  </div>     
   <div class="form-group">

    <label for="exampleInputEmail1">BIAYA PNBP TNKB</label>
    <input type="number" class="form-control"  name="pnbptnkb" id="pnbptnkb"  >
    
  </div>     
                 
                
                
                
                
                </div>
                
                <!-- /.card-body -->
              
            </div>
         
              <!-- /.card-body -->
            </div>

   <div class="col-6">
   <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambahan untuk Kondisi Tertentu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
               
                <div class="card-body">
                 
                
                   
   <div class="form-group">

    <label for="exampleInputEmail1">Built UP</label>
    <input type="number" class="form-control"  name="built_up" id="built_up"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Samsat_2</label>
    <input type="number" class="form-control"  name="samsat_2" id="samsat_2"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PT/CV</label>
    <input type="number" class="form-control"  name="pt_cv" id="pt_cv"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PT/CV NON NPWP</label>
    <input type="number" class="form-control"  name="non_npwp" id="non_npwp"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Perpanjangan STCK</label>
    <input type="number" class="form-control"  name="perpanjangan_stck" id="perpanjangan_stck"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Nopol Pilihan</label>
    <input type="number" class="form-control"  name="nopol_pilihan" id="nopol_pilihan"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Penalti Wilayah</label>
    <input type="number" class="form-control"  name="penalti_wilayah" id="penalti_wilayah"  >
    
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
    <input type="text" class="form-control"  name="no_faktur" id="no_faktur"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Tgl Faktur</label>
    <input type="date" class="form-control"  name="tgl_faktur" id="tgl_faktur"  >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Nopol</label>
    <input type="text" class="form-control"  name="nopol" id="nopol"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Merk</label>
    <input type="text" class="form-control"  name="merk" id="merk" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')"  >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Jenis</label>
    <input type="text" class="form-control"  name="jenis" id="jenis" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')"  >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Tipe</label>
    <input type="text" class="form-control"  name="tipe" id="tipe" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')"  >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Model</label>
    <input type="text" class="form-control"  name="model" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')" >
    
  </div>
            <div class="form-group">

    <label for="exampleInputEmail1">Tahun Buat</label>
    <input type="number" class="form-control"  name="tahun_buat" id="tahun_buat"  >
    
  </div>     
   <div class="form-group">

    <label for="exampleInputEmail1">Tahun Rakit</label>
    <input type="number" class="form-control"  name="tahun_rakit" id="tahun_rakit"  >
    
  </div> 
  <div class="form-group">

    <label for="exampleInputEmail1">Silinder</label>
    <input type="text" class="form-control"  name="silinder" id="silinder"  >
    
  </div> 
  <div class="form-group">

    <label for="exampleInputEmail1">Warna</label>
    <input type="text" class="form-control"  name="warna" id="warna"  >
    
  </div>   
    <div class="form-group">

    <label for="exampleInputEmail1">Bahan Bakar</label>
    <input type="text" class="form-control"  name="bahan_bakar" id="bahan_bakar"  >
    
  </div>     
    <div class="form-group">

    <label for="exampleInputEmail1">No Rangka</label>
    <input type="text" class="form-control"  name="no_rangka" id="no_rangka" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')"  >
    
  </div>   
    <div class="form-group">

    <label for="exampleInputEmail1">No Mesin</label>
    <input type="text" class="form-control"  name="no_mesin" id="no_mesin" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')"  >
    
  </div>   
  <div class="form-group">

    <label for="exampleInputEmail1">Nama Pemilik 1</label>
    <input type="text" class="form-control"  name="pemilik_1" id="pemilik_1" required oninvalid="this.setCustomValidity('Wajib Diisi')" oninput="setCustomValidity('')"  >
    
  </div>  
   <div class="form-group">

    <label for="exampleInputEmail1">Nama Pemilik 2</label>
    <input type="text" class="form-control"  name="pemilik_2" id="pemilik_2"  >
    
  </div>  
   <div class="form-group">

    <label for="exampleInputEmail1">Alamat Pemilik 1</label>
    <input type="text" class="form-control"  name="alamat_pemilik_1" id="pemilik_1"  >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kec</label>
    <input type="text" class="form-control"  name="kec" id="kec"  >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kab</label>
    <input type="text" class="form-control"  name="kab" id="kab"  >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kode Pos</label>
    <input type="text" class="form-control"  name="kode_pos" id="kode_pos"  >
    
  </div> 
  <div class="form-group">

    <label for="exampleInputEmail1">Pekerjaan</label>
    <input type="text" class="form-control"  name="pekerjaan"   >
    
  </div>
                 
        <div class="form-group">

    <label for="exampleInputEmail1">No KTP</label>
    <input type="text" class="form-control"  name="no_ktp"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">ATPM</label>
    <input type="text" class="form-control"  name="atpm"   >
    
  </div>
  
  <div class="form-group">

    <label for="exampleInputEmail1">Jumlah Sumbu</label>
    <input type="number" class="form-control"  name="jumlah_sumbu"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Jumlah Roda</label>
    <input type="number" class="form-control"  name="jumlah_roda"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">No SUT</label>
    <input type="text" class="form-control"  name="no_sut"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">No TPT</label>
    <input type="text" class="form-control"  name="no_tpt"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">No PIB</label>
    <input type="text" class="form-control"  name="no_pib"   >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">No Form AB</label>
    <input type="text" class="form-control"  name="no_form_ab"   >
    
  </div>
       
                
                
                
                </div>
                <div class="card-action">
                     <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                   
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
                                '" data-perpanjangan_stck="'+data[i].perpanjangan_stck+
                                '" data-nopol_pilihan="'+data[i].nopol_pilihan+
                                '" data-penalti_wilayah="'+data[i].penalti_wilayah+
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
            var perpanjangan_stck = selectedOption.data('perpanjangan_stck');
            var nopol_pilihan = selectedOption.data('nopol_pilihan');
            var penalti_wilayah = selectedOption.data('penalti_wilayah');
            $('#by_proses').val(by_proses);
            $('#bpkb').val(bpkb);
            $('#jasa').val(jasa);
            $('#stck').val(stck);
            $('#samsat_1').val(samsat_1);
            $('#samsat_2').val(samsat_2);
            $('#built_up').val(built_up);
            $('#pt_cv').val(pt_cv);
            $('#non_npwp').val(non_npwp);
            $('#perpanjangan_stck').val(perpanjangan_stck);
            $('#nopol_pilihan').val(nopol_pilihan);
            $('#penalti_wilayah').val(penalti_wilayah);
        });
    });
</script>
