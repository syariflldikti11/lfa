  
   <?php 

 
function rupiah($angka){
  
  $hasil_rupiah = "" . number_format($angka,0,',','.');
  return $hasil_rupiah;
 
}
 

?>
  <div class="container">
          <div class="page-inner">
          
             <div class="row">
                <div class="col-6">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Biaya</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                 <?php  
             echo validation_errors();                       
    echo form_open('app/tambah_perjadin','class="form-horizontal"'); ?>
                <div class="card-body">
                 
                        <div class="form-group">

    <label for="exampleInputEmail1">Jasa Pengurusan</label>
  <select class="js-example-basic-single form-select" style="width:100%" id="category" name="id_pengurusan" required>
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
   <select class="js-example-basic-single form-select" id="sub_category" name="wilayah" required>
                                        <option value="">No Selected</option>
 
                                    </select>
    
  </div>
                  <div class="form-group">

    <label for="exampleInputEmail1">BPKB</label>
    <input type="text" class="form-control"  name="bpkb" id="bpkb" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">STCK</label>
    <input type="text" class="form-control"  name="stck" id="stck" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Samsat_1</label>
    <input type="text" class="form-control"  name="samsat_1" id="samsat_1" required >
    
  </div>
    <div class="form-group">

    <label for="exampleInputEmail1">By Proses</label>
    <input type="text" class="form-control"  name="by_proses" id="by_proses" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Jasa</label>
    <input type="text" class="form-control"  name="jasa" id="jasa" required >
    
  </div>
         
                
                
                
                
                </div>
                <!-- /.card-body -->
               
                <!-- /.card-footer -->
             
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambahan untuk Kondisi Tertentu</h3><font color="red">(Silahkan checklist jika dibutuhkan)</font>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
               
                <div class="card-body">
                 
                
                   
   <div class="form-group">

    <label for="exampleInputEmail1">Built UP</label>
    <input type="text" class="form-control"  name="built_up" id="built_up" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Samsat_2</label>
    <input type="text" class="form-control"  name="samsat_2" id="samsat_2" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PT/CV</label>
    <input type="text" class="form-control"  name="pt_cv" id="pt_cv" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PT/CV NON NPWP</label>
    <input type="text" class="form-control"  name="non_npwp" id="non_npwp" required >
    
  </div>
          
                 
                  
                
                
                
                
                </div>
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
              
            </div>
              <!-- /.card-body -->
            </div>

   <div class="col-6">


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Notice Pajak</h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
               
                <div class="card-body">
                  <div class="form-group">

    <label for="exampleInputEmail1">BBN-KB</label>
    <input type="text" class="form-control"  name="bbn_kb" id="bbn_kb" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">OPSEN BBN-KB</label>
    <input type="text" class="form-control"  name="opsen_bbnkb" id="opsen_bbnkb" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">PKB</label>
    <input type="text" class="form-control"  name="pkb" id="pkb" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">OPSEN PKB</label>
    <input type="text" class="form-control"  name="opsen_pkb" id="opsen_pkb" required >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">SWDKLLJ</label>
    <input type="text" class="form-control"  name="swdkllj" id="swdkllj" required >
    
  </div>
            <div class="form-group">

    <label for="exampleInputEmail1">OBIAYA PNBP STNK</label>
    <input type="text" class="form-control"  name="pnbpstnk" id="pnbpstnk" required >
    
  </div>     
   <div class="form-group">

    <label for="exampleInputEmail1">OBIAYA PNBP TNKB</label>
    <input type="text" class="form-control"  name="pnbptnkb" id="pnbptnkb" required >
    
  </div>     
                 
                
                
                
                
                </div>
                
                <!-- /.card-body -->
              
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
    <input type="text" class="form-control"  name="no_faktur" id="no_faktur" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Tgl Faktur</label>
    <input type="text" class="form-control"  name="tgl_faktur" id="tgl_faktur" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Merk</label>
    <input type="text" class="form-control"  name="merk" id="merk" required >
    
  </div>
   <div class="form-group">

    <label for="exampleInputEmail1">Jenis</label>
    <input type="text" class="form-control"  name="jenis" id="jenis" required >
    
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Tipe</label>
    <input type="text" class="form-control"  name="tipe" id="tipe" required >
    
  </div>
            <div class="form-group">

    <label for="exampleInputEmail1">Tahun Buat</label>
    <input type="text" class="form-control"  name="tahun_buat" id="tahun_buat" required >
    
  </div>     
   <div class="form-group">

    <label for="exampleInputEmail1">Tahun Rakit</label>
    <input type="text" class="form-control"  name="tahun_rakit" id="tahun_rakit" required >
    
  </div> 
  <div class="form-group">

    <label for="exampleInputEmail1">Silinder</label>
    <input type="text" class="form-control"  name="silinder" id="silinder" required >
    
  </div> 
  <div class="form-group">

    <label for="exampleInputEmail1">Warna</label>
    <input type="text" class="form-control"  name="warna" id="warna" required >
    
  </div>   
    <div class="form-group">

    <label for="exampleInputEmail1">Bahan Bakar</label>
    <input type="text" class="form-control"  name="bahan_bakar" id="bahan_bakar" required >
    
  </div>     
    <div class="form-group">

    <label for="exampleInputEmail1">No Rangka</label>
    <input type="text" class="form-control"  name="no_rangka" id="no_rangka" required >
    
  </div>   
    <div class="form-group">

    <label for="exampleInputEmail1">No Mesin</label>
    <input type="text" class="form-control"  name="no_mesin" id="no_mesin" required >
    
  </div>   
  <div class="form-group">

    <label for="exampleInputEmail1">Nama Pemilik 1</label>
    <input type="text" class="form-control"  name="pemilik_1" id="pemilik_1" required >
    
  </div>  
   <div class="form-group">

    <label for="exampleInputEmail1">Nama Pemilik 2</label>
    <input type="text" class="form-control"  name="pemilik_2" id="pemilik_2" required >
    
  </div>  
   <div class="form-group">

    <label for="exampleInputEmail1">Alamat Pemilik 1</label>
    <input type="text" class="form-control"  name="pemilik_1" id="pemilik_1" required >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kec</label>
    <input type="text" class="form-control"  name="kec" id="kec" required >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kab</label>
    <input type="text" class="form-control"  name="kab" id="kab" required >
    
  </div> 
   <div class="form-group">

    <label for="exampleInputEmail1">Kode Pos</label>
    <input type="text" class="form-control"  name="kode_pos" id="kode_pos" required >
    
  </div> 
                 
                
                
                
                
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
