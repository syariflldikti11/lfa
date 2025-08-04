<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->database();
       $this->load->library('uuid'); // Memuat library UUID
    if($this->session->userdata('akses') <> 2){
        redirect(base_url('login'));
        }
  }

  function tanda_terima()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_tanda_terima' => $this->m_umum->get_tanda_terima()
        );
        $this->template->load('operator/template', 'operator/tanda_terima', $data);
    }
     function tambah_tanda_terima()
     {
       
    $data = array(
            'dt_transaksi' => $this->m_umum->get_data('transaksi'),
        );
        $this->db->set('id_tanda_terima', 'UUID()', FALSE);
        $this->form_validation->set_rules('tgl_tanda_terima', 'tgl_tanda_terima', 'required');


        if ($this->form_validation->run() === FALSE) {

            $this->template->load('operator/template', 'operator/tambah_tanda_terima',$data);
        }
        else{

            $this->m_umum->set_data("tanda_terima");
            $notif = "Tambah Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('operator/tanda_terima');
        }
    }
     function update_tanda_terima($id=NULL)
    {
 $data = array(
            'dt_transaksi' => $this->m_umum->get_data('transaksi'),
            'd' => $this->m_umum->ambil_data('tanda_terima','id_tanda_terima',$id),
        );
        $this->form_validation->set_rules('id_tanda_terima', 'id_tanda_terima', 'required');
        if ($this->form_validation->run() === FALSE)
            $this->template->load('operator/template', 'operator/update_tanda_terima',$data);
        else {
            $this->m_umum->update_data("tanda_terima");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('operator/tanda_terima');
        }
    }
  
    function delete_tanda_terima($id)
    {

        $this->m_umum->hapus('tanda_terima', 'id_tanda_terima', $id);
        $notif = "Data Berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect('operator/tanda_terima');
    }
    function detail_tanda_terima($id,$id_transaksi)
    {

        $data = array(
            'judul' => 'Detail tanda_terima',
            'id' => $id,
            'id_transaksi' => $id_transaksi,
            'dt_detail_tanda_terima' => $this->m_umum->get_detail_tanda_terima($id),
           
            'a' => $this->m_umum->ambil_data('tanda_terima','id_tanda_terima',$id),
        );
        $this->template->load('operator/template', 'operator/detail_tanda_terima', $data);
    }
    function tambah_detail_tanda_terima($id=null,$id_transaksi=null)
     {
       
         
         $ids=$this->input->post('id_tanda_terima');
         $idt=$this->input->post('id_transaksi');

    $data = array(
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
            'id' => $id,
            'id_transaksi' => $id_transaksi,
            'dt_detail_transaksi' => $this->m_umum->get_detail_transaksi_x($id_transaksi),
        );
        $this->db->set('id_detail_tanda_terima', 'UUID()', FALSE);
        
        $this->form_validation->set_rules('id_detail_transaksi', 'id_detail_transaksi', 'required');


        if ($this->form_validation->run() === FALSE) {

            $this->template->load('operator/template', 'operator/tambah_detail_tanda_terima',$data);
        }
        else{

           $data = array(
'id_detail_transaksi' => $this->input->post('id_detail_transaksi'),
'dokumen' => $this->input->post('dokumen'),
'id_tanda_terima' => $this->input->post('id_tanda_terima'),
);
   $this->db->insert('detail_tanda_terima', $data);
            $notif = "Tambah Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
             redirect(base_url()."operator/detail_tanda_terima/".$ids."/".$idt);
        }
    }
     function update_detail_tanda_terima($id=null,$id_transaksi=null)
     {
       
         
         $ids=$this->input->post('id_tanda_terima');
         $idt=$this->input->post('id_transaksi');

$id_tt=$this->input->post('id_detail_tanda_terima');

    $data = array(
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
            'id' => $id,
            'id_transaksi' => $id_transaksi,
            'dt_detail_transaksi' => $this->m_umum->get_detail_transaksi_x($id_transaksi),
             'd' => $this->m_umum->ambil_data('detail_tanda_terima','id_detail_tanda_terima',$id),
        );
        $this->db->set('id_detail_tanda_terima', 'UUID()', FALSE);
        
        $this->form_validation->set_rules('id_detail_transaksi', 'id_detail_transaksi', 'required');


        if ($this->form_validation->run() === FALSE) {

            $this->template->load('operator/template', 'operator/update_detail_tanda_terima',$data);
        }
        else{

           $data = array(
'id_detail_transaksi' => $this->input->post('id_detail_transaksi'),
'dokumen' => $this->input->post('dokumen'),
);
  $this->db->where('id_detail_tanda_terima', $id_tt);
        $this->db->update('detail_tanda_terima', $data);
            $notif = "Update Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
             redirect(base_url()."operator/detail_tanda_terima/".$ids."/".$idt);
        }
    }
     function delete_detail_tanda_terima($id=NULL,$id_tt,$idt)
{
  
    $this->m_umum->hapus('detail_tanda_terima','id_detail_tanda_terima',$id);
     $notif = " Data berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
      redirect(base_url()."operator/detail_tanda_terima/".$id_tt."/".$idt);
        
}
   function receipt($id)
    {

        $data = array(
            'judul' => 'Detail Pengurusan',
            'id' => $id,
           'a' => $this->m_umum->get_receipt($id),
            'dt_detail_tanda_terima' => $this->m_umum->get_detail_tanda_terima($id),
            'c' => $this->m_umum->ambil_data('profil','id_profil',1),
        );
        $this->load->view('laporan/receipt', $data);
    }

  function index()
    {
        $data = array(
            'judul' => 'Dashboard',
            'jumlah_pelanggan' => $this->m_umum->hitung('pelanggan'),
            'jumlah_transaksi' => $this->m_umum->hitung('transaksi'),
            'pl_baru' => $this->m_umum->get_pelanggan_baru(),
            'pd_jasa' => $this->m_umum->grafik_pendapatan_jasa(),
            'py' => $this->m_umum->get_payment(),
            'js' => $this->m_umum->get_data('pengurusan'),
            

        );
          foreach($this->m_umum->grafik_transaksi()->result_array() as $row)
        {
         $data['grafik_transaksi'][]=(float)$row['Januari'];
         $data['grafik_transaksi'][]=(float)$row['Februari'];
         $data['grafik_transaksi'][]=(float)$row['Maret'];
         $data['grafik_transaksi'][]=(float)$row['April'];
         $data['grafik_transaksi'][]=(float)$row['Mei'];
         $data['grafik_transaksi'][]=(float)$row['Juni'];
         $data['grafik_transaksi'][]=(float)$row['Juli'];
         $data['grafik_transaksi'][]=(float)$row['Agustus'];
         $data['grafik_transaksi'][]=(float)$row['September'];
         $data['grafik_transaksi'][]=(float)$row['Oktober'];
         $data['grafik_transaksi'][]=(float)$row['November'];
         $data['grafik_transaksi'][]=(float)$row['Desember'];
        }
        $this->template->load('operator/template', 'operator/home', $data);
    }
    function user()
    {
        $data = array(
            'judul' => 'user',
            'dt_user' => $this->m_umum->get_data('user'),

        );
        $this->template->load('operator/template', 'operator/user', $data);
    }
    function tambah_user()
     {
      $password = $this->input->post('password');
$password_hash=password_hash($password, PASSWORD_DEFAULT);
        $this->db->set('id_user', 'UUID()', FALSE);
        $this->db->set('password', $password_hash);
        $this->form_validation->set_rules('username', 'username', 'required');

           $this->form_validation->set_rules(
    'username',  // field name
    'Username',  // human-readable field name
    'required|is_unique[user.username]',  // validation rule
    array(
        'is_unique' => 'Username sudah ada !!' // custom error message for is_unique
    )
);

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());

            $this->template->load('operator/template', 'operator/tambah_user');
        }
        else{

            $this->m_umum->set_data("user");
            $notif = "Tambah Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('operator/user');
        }
    }
    function update_user($id=NULL)
    {
         $data = array(
                'judul' => 'Update user',
            'd' => $this->m_umum->ambil_data('user','id_user',$id)

        );
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        $this->form_validation->set_rules('nama_user', 'nama_user', 'required');
       
        if ($this->form_validation->run() === FALSE)
            $this->template->load('operator/template', 'operator/update_user',$data);
             
        else {
            $this->m_umum->update_data("user");
            $notif = " Update data Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('operator/user');
        }
    }
      function profil()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_profil' => $this->m_umum->get_data('profil'),
        );
        $this->template->load('operator/template', 'operator/profil', $data);
    }
       function banner()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_banner' => $this->m_umum->get_data('banner'),
        );
        $this->template->load('operator/template', 'operator/banner', $data);
    }
    function update_banner()
  {
    $id_banner = $this->input->post('id_banner');
    $judul = $this->input->post('judul');
  
    $isi = $this->input->post('isi');
    $old = $this->input->post('old_file');

    if (!empty($_FILES["file"]["name"])) {
      $file = $this->uploadFile();
      unlink("./upload/$old");
    } else {
      $file = $old;
    }
    $data_update = array(
      'judul' => $judul,
      'isi' => $isi,
      'file' => $file
    );
    $where = array('id_banner' => $id_banner);
    $res = $this->m_umum->UpdateData('banner', $data_update, $where);
    if ($res >= 1) {

      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
      redirect('operator/banner');
    } else {
      echo "<h1>GAGAL</h1>";
    }
  }
  public function uploadFile()
  {
    $config['upload_path'] = 'upload';
    $config['allowed_types'] = 'pdf|jpg|jpeg|png|pdf|xls|xlsx|doc|docx';
    $config['overwrite'] = false;
    $config['max_size'] = 2000; // 1MB
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('file')) {
      return $this->upload->data("file_name");
    }
    $error = $this->upload->display_errors();
    echo $error;
    exit;
    // return "default.jpg";
  }
     function Laporan()
    {

        $data = array(
            'judul' => 'Laporan',
                'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
                'dt_pengurusan' => $this->m_umum->get_data('pengurusan'),
                'dt_transaksi' => $this->m_umum->get_data('transaksi'),
        );
        $this->template->load('operator/template', 'operator/laporan', $data);
    }
      function laporan_transaksi()
    {
$id_pelanggan = $this->input->post('id_pelanggan');
$status = $this->input->post('status');
$status_payment = $this->input->post('status_payment');
$dari = $this->input->post('dari');
$sampai = $this->input->post('sampai');
 $data = array(
           'dt_transaksi' => $this->m_umum->laporan_transaksi($id_pelanggan,$status,$status_payment,$dari,$sampai)

        );
 $this->load->view('laporan/laporan_transaksi', $data);
    }
    function laporan_detail_transaksi()
    {
$no_transaksi = $this->input->post('no_transaksi');
$dari = $this->input->post('dari');
$sampai = $this->input->post('sampai');
 $data = array(
           'dt_detail_transaksi' => $this->m_umum->laporan_detail_transaksi($no_transaksi,$dari,$sampai)

        );
 $this->load->view('laporan/laporan_detail_transaksi', $data);
    }
     function laporan_pajak()
    {
$tahun = $this->input->post('tahun');
$persentase = $this->input->post('persentase');

 $data = array(
           'dt_detail_transaksi' => $this->m_umum->laporan_pajak($tahun)

        );
 $this->load->view('laporan/laporan_pajak', $data);
    }

    function laporan_pendapatan()
    {
$tahun = $this->input->post('tahun');
 $data = array(
            
            'c' => $this->m_umum->ambil_data('profil','id_profil',1),
              'a' => $this->m_umum->get_data('pengurusan'),
        );

 $this->load->view('admin/pendapatan_print',$data);
    }
function laporan_pendapatan_perjasa()
    {
$tahun = $this->input->post('tahun');
 $data = array(
            
            'dt_pendapatan' => $this->m_umum->laporan_pendapatan_jasa($tahun),

        );

 $this->load->view('laporan/pendapatan_perjasa',$data);
    }
    function laporan_kepuasan()
    {
$tahun = $this->input->post('tahun');
 $data = array(
            
            'dt_kepuasan' => $this->m_umum->laporan_kepuasan($tahun),

        );

 $this->load->view('laporan/kepuasan',$data);
    }
     function laporan_jasa_terlaris()
    {
$tahun = $this->input->post('tahun');
 $data = array(
            
            'dt_jasa' => $this->m_umum->laporan_jasa_terlaris($tahun),

        );

 $this->load->view('laporan/laporan_jasa_terlaris',$data);
    }


    function update_profil()
    {

        $this->form_validation->set_rules('id_profil', 'id_profil', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('operator/profil');
        else {
            $this->m_umum->update_data("profil");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('operator/profil');
        }
    }

     function pengurusan()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_pengurusan' => $this->m_umum->get_data('pengurusan'),
        );
        $this->template->load('operator/template', 'operator/pengurusan', $data);
    }
    function simpan_pengurusan()
    {

        $this->db->set('id_pengurusan', 'UUID()', FALSE);
        $this->form_validation->set_rules('nama_pengurusan', 'nama_pengurusan', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('operator/pengurusan');
        else {

            $this->m_umum->set_data("pengurusan");
            $notif = "Tambah Data Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('operator/pengurusan');
        }
    }
    function update_pengurusan()
    {

        $this->form_validation->set_rules('id_pengurusan', 'id_pengurusan', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('operator/pengurusan');
        else {
            $this->m_umum->update_data("pengurusan");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('operator/pengurusan');
        }
    }
  
    function transaksi()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_transaksi' => $this->m_umum->get_transaksi(),
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
        );
        $this->template->load('operator/template', 'operator/transaksi', $data);
    }
     function tambah_transaksi()
     {
         $kode_unik = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3);
         $kode_unik1 = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3);
           $tgl = date('d');
        $bln = date('m');
        $thn = date('Y');
        $jam = date('h');
        $menitdetik = date('s');

   $no_trx = 'LFA'.$jam.$kode_unik.$tgl.$menitdetik.$kode_unik1;
    $data = array(
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
        );
        $this->db->set('id_transaksi', 'UUID()', FALSE);
        $this->db->set('no_transaksi',$no_trx);
        $this->form_validation->set_rules('tgl_transaksi', 'tgl_transaksi', 'required');


        if ($this->form_validation->run() === FALSE) {

            $this->template->load('operator/template', 'operator/tambah_transaksi',$data);
        }
        else{

            $this->m_umum->set_data("transaksi");
            $notif = "Tambah Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('operator/transaksi');
        }
    }
     function update_transaksi($id=NULL)
    {
 $data = array(
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
            'd' => $this->m_umum->ambil_data('transaksi','id_transaksi',$id),
        );
        $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'required');
        if ($this->form_validation->run() === FALSE)
            $this->template->load('operator/template', 'operator/update_transaksi',$data);
        else {
            $this->m_umum->update_data("transaksi");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('operator/transaksi');
        }
    }
  
    
     function detail_transaksi($id)
    {

        $data = array(
            'judul' => 'Detail transaksi',
            'id' => $id,
            'dt_detail_transaksi' => $this->m_umum->get_detail_transaksi($id),
            'a' => $this->m_umum->ambil_data('transaksi','id_transaksi',$id),
        );
        $this->template->load('operator/template', 'operator/detail_transaksi', $data);
    }
      function tambah_detail_transaksi($id=null)
     {
       
         
         $ids=$this->input->post('id_transaksi');

    $data = array(
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
            'id' => $id,
            'dt_pengurusan' => $this->m_umum->get_data('pengurusan'),
        );
        $this->db->set('id_detail_transaksi', 'UUID()', FALSE);
        
        $this->form_validation->set_rules('id_pengurusan', 'id_pengurusan', 'required');


        if ($this->form_validation->run() === FALSE) {

            $this->template->load('operator/template', 'operator/tambah_detail_transaksi',$data);
        }
        else{

            $this->m_umum->set_data("detail_transaksi");
             $querysum = $this->db->query("Select sum(bpkb + stck + samsat_1 + by_proses + jasa + built_up + samsat_2 + pt_cv + non_npwp + bbn_kb + opsen_bbnkb + pkb + opsen_pkb + swdkllj + pnbpstnk + pnbptnkb  + nopol_pilihan + penalti_wilayah) as total from detail_transaksi where id_transaksi='$ids'");
    foreach ($querysum->result() as $roww) {
        $total=$roww->total;
    }
  
$data = array(
'total' => $total
);
$this->db->set($data);
$this->db->where('id_transaksi', $ids);
$this->db->update('transaksi');
            $notif = "Tambah Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
             redirect(base_url()."operator/detail_transaksi/".$ids);
        }
    }
      function update_detail_transaksi($id=NULL)
    {
         $ids=$this->input->post('id_transaksi');
         $id_detail_transaksi=$this->input->post('id_detail_transaksi');
         $id_pengurusan=$this->input->post('id_pengurusan');
         $wilayah=$this->input->post('wilayah');
          if($id_pengurusan=='old'){
        $id_pengurusan = $this->input->post('old_id_pengurusan');
  }
  else{
    $id_pengurusan = $this->input->post('id_pengurusan');
  }
    if($wilayah=='old'){
        $wilayah = $this->input->post('old_wilayah');
  }
  else{
    $wilayah = $this->input->post('wilayah');
  }
$data = array(
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
            'id' => $id,
            'dt_pengurusan' => $this->m_umum->get_data('pengurusan'),
            'd' => $this->m_umum->ambil_data('detail_transaksi','id_detail_transaksi',$id),
        );
         $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'required');
        if ($this->form_validation->run() === FALSE)
               $this->template->load('operator/template', 'operator/update_detail_transaksi',$data);
        else {
          $data_update = array(
    
    'id_pengurusan' => $id_pengurusan,
    'wilayah' => $wilayah,
    'bpkb' => $this->input->post('bpkb'),
    'stck' => $this->input->post('stck'),
  
    'samsat_1' => $this->input->post('samsat_1'),
    'by_proses' => $this->input->post('by_proses'),
    'jasa' => $this->input->post('jasa'),
    'built_up' => $this->input->post('built_up'),
    'samsat_2' => $this->input->post('samsat_2'),
    'pt_cv' => $this->input->post('pt_cv'),
    'non_npwp' => $this->input->post('non_npwp'),
    'bbn_kb' => $this->input->post('bbn_kb'),
    'opsen_bbnkb' => $this->input->post('opsen_bbnkb'),
    'pkb' => $this->input->post('pkb'),
    'opsen_pkb' => $this->input->post('opsen_pkb'),
    'swdkllj' => $this->input->post('swdkllj'),
    'pnbpstnk' => $this->input->post('pnbpstnk'),
    'pnbptnkb' => $this->input->post('pnbptnkb'),
    'no_faktur' => $this->input->post('no_faktur'),
    'tgl_faktur' => $this->input->post('tgl_faktur'),
    'nopol' => $this->input->post('nopol'),
    'merk' => $this->input->post('merk'),
    'jenis' => $this->input->post('jenis'),
    'tipe' => $this->input->post('tipe'),
    'tahun_buat' => $this->input->post('tahun_buat'),
    'tahun_rakit' => $this->input->post('tahun_rakit'),
    'silinder' => $this->input->post('silinder'),
    'warna' => $this->input->post('warna'),
    'bahan_bakar' => $this->input->post('bahan_bakar'),
    'no_rangka' => $this->input->post('no_rangka'),
    'no_mesin' => $this->input->post('no_mesin'),
    'pemilik_1' => $this->input->post('pemilik_1'),
    'pemilik_2' => $this->input->post('pemilik_2'),
    'alamat_pemilik_1' => $this->input->post('alamat_pemilik_1'),
    'kec' => $this->input->post('kec'),
    'kab' => $this->input->post('kab'),
    'kode_pos' => $this->input->post('kode_pos'),
    'pekerjaan' => $this->input->post('pekerjaan'),
    'no_ktp' => $this->input->post('no_ktp'),
    'atpm' => $this->input->post('atpm'),
    'model' => $this->input->post('model'),
    'jumlah_roda' => $this->input->post('jumlah_roda'),
    'jumlah_sumbu' => $this->input->post('jumlah_sumbu'),
    'no_sut' => $this->input->post('no_sut'),
    'no_tpt' => $this->input->post('no_tpt'),
    'no_pib' => $this->input->post('no_pib'),
    'no_form_ab' => $this->input->post('no_form_ab'),
    'perpanjangan_stck' => $this->input->post('perpanjangan_stck'),
    'nopol_pilihan' => $this->input->post('nopol_pilihan'),
    'penalti_wilayah' => $this->input->post('penalti_wilayah'),
    );
    $where = array('id_detail_transaksi' => $id_detail_transaksi);
    $res = $this->m_umum->UpdateData('detail_transaksi', $data_update, $where);
    if ($res >= 1) {
 $querysum = $this->db->query("Select sum(bpkb + stck + samsat_1 + by_proses + jasa + built_up + samsat_2 + pt_cv + non_npwp + bbn_kb + opsen_bbnkb + pkb + opsen_pkb + swdkllj + pnbpstnk + pnbptnkb  + nopol_pilihan + penalti_wilayah) as total from detail_transaksi where id_transaksi='$ids'");
    foreach ($querysum->result() as $roww) {
        $total=$roww->total;
    }
  
$data = array(
'total' => $total
);
$this->db->set($data);
$this->db->where('id_transaksi', $ids);
$this->db->update('transaksi');
      $notif = " Data berhasil diupdate";
      $this->session->set_flashdata('update', $notif);
       redirect(base_url()."operator/detail_transaksi/".$ids);
    } else {
      $notif = "Gagal";
      $this->session->set_flashdata('delete', $notif);
       redirect(base_url()."operator/detail_transaksi/".$ids);
    }
            
        }
    }
   
 
    function get_sub_tarif_pengurusan(){
                $id_pengurusan = $this->input->post('id',TRUE);
                $data = $this->m_umum->get_sub_tarif_pengurusan($id_pengurusan)->result();
                echo json_encode($data);
        }
    function pelanggan()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
        );
        $this->template->load('operator/template', 'operator/pelanggan', $data);
    }
    function invoice($id)
    {

        $data = array(
            'judul' => 'Detail Pengurusan',
            'id' => $id,
            'a' => $this->m_umum->get_invoice($id),
            'dt_detail_transaksi' => $this->m_umum->get_detail_transaksi($id),
            'c' => $this->m_umum->ambil_data('profil','id_profil',1),
        );
        $this->template->load('operator/template', 'operator/invoice', $data);
    }
      function invoice_print($id)
    {

        $data = array(
            'judul' => 'Detail Pengurusan',
            'id' => $id,
            'a' => $this->m_umum->get_invoice($id),
            'dt_detail_transaksi' => $this->m_umum->get_detail_transaksi($id),
            'c' => $this->m_umum->ambil_data('profil','id_profil',1),
        );
        $this->load->view('operator/invoice_print', $data);
    }
    function pendapatan_print()
    {

        $data = array(
            'judul' => 'Detail Pengurusan',
             'c' => $this->m_umum->ambil_data('profil','id_profil',1),
            'a' => $this->m_umum->get_data('pengurusan'),
        );
        $this->load->view('operator/pendapatan_print', $data);
    }
    function simpan_pelanggan()
    {

        $this->db->set('id_pelanggan', 'UUID()', FALSE);
        $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('operator/pelanggan');
        else {

            $this->m_umum->set_data("pelanggan");
            $notif = "Tambah Data Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('operator/pelanggan');
        }
    }
    function update_pelanggan()
    {

        $this->form_validation->set_rules('id_pelanggan', 'id_pelanggan', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('operator/pelanggan');
        else {
            $this->m_umum->update_data("pelanggan");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('operator/pelanggan');
        }
    }
 
    function detail_pengurusan($id)
    {

        $data = array(
            'judul' => 'Detail Pengurusan',
            'id' => $id,
            'dt_detail_pengurusan' => $this->m_umum->get_detail_pengurusan($id),
            'a' => $this->m_umum->ambil_data('pengurusan','id_pengurusan',$id),
        );
        $this->template->load('operator/template', 'operator/detail_pengurusan', $data);
    }
    function simpan_detail_pengurusan() { 
    
    $this->db->set('id_detail_pengurusan', 'UUID()', FALSE);
    $this->form_validation->set_rules('wilayah','wilayah','required');
    $id=$this->input->post('id_pengurusan');
    if($this->form_validation->run() === FALSE)
   redirect(base_url()."operator/detail_pengurusan/".$id);
    else
    {
        
        $this->m_umum->set_data("detail_pengurusan");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect(base_url()."operator/detail_pengurusan/".$id);
    }
  
}

function update_detail_pengurusan()
  {
        
    $this->form_validation->set_rules('id_detail_pengurusan','id_detail_pengurusan','required');
        $id=$this->input->post('id_pengurusan');
    if($this->form_validation->run() === FALSE)
        redirect(base_url()."operator/detail_pengurusan/".$id);
    else
    {
      $this->m_umum->update_data("detail_pengurusan");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
            redirect(base_url()."operator/detail_pengurusan/".$id);
    }
    
  }


 
 
}
