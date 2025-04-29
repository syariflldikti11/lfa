<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->database();
       $this->load->library('uuid'); // Memuat library UUID
    if($this->session->userdata('akses') <> 1){
        redirect(base_url('login'));
        }
  }
  
  function index()
    {
        $data = array(
            'judul' => 'Dashboard',
            'jumlah_pelanggan' => $this->m_umum->hitung('pelanggan'),
            'jumlah_transaksi' => $this->m_umum->hitung('transaksi'),
            

        );
        $this->template->load('admin/template', 'admin/home', $data);
    }
    function user()
    {
        $data = array(
            'judul' => 'user',
            'dt_user' => $this->m_umum->get_data('user'),

        );
        $this->template->load('admin/template', 'admin/user', $data);
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

            $this->template->load('admin/template', 'admin/tambah_user');
        }
        else{

            $this->m_umum->set_data("user");
            $notif = "Tambah Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('admin/user');
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
            $this->template->load('admin/template', 'admin/update_user',$data);
             
        else {
            $this->m_umum->update_data("user");
            $notif = " Update data Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('admin/user');
        }
    }
      function profil()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_profil' => $this->m_umum->get_data('profil'),
        );
        $this->template->load('admin/template', 'admin/profil', $data);
    }

    function update_profil()
    {

        $this->form_validation->set_rules('id_profil', 'id_profil', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/profil');
        else {
            $this->m_umum->update_data("profil");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('admin/profil');
        }
    }

     function pengurusan()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_pengurusan' => $this->m_umum->get_data('pengurusan'),
        );
        $this->template->load('admin/template', 'admin/pengurusan', $data);
    }
    function simpan_pengurusan()
    {

        $this->db->set('id_pengurusan', 'UUID()', FALSE);
        $this->form_validation->set_rules('nama_pengurusan', 'nama_pengurusan', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/pengurusan');
        else {

            $this->m_umum->set_data("pengurusan");
            $notif = "Tambah Data Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('admin/pengurusan');
        }
    }
    function update_pengurusan()
    {

        $this->form_validation->set_rules('id_pengurusan', 'id_pengurusan', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/pengurusan');
        else {
            $this->m_umum->update_data("pengurusan");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('admin/pengurusan');
        }
    }
    function delete_pengurusan($id)
    {

        $this->m_umum->hapus('pengurusan', 'id_pengurusan', $id);
        $notif = "Data Berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect('admin/pengurusan');
    }
    function transaksi()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_transaksi' => $this->m_umum->get_transaksi(),
            'dt_pelanggan' => $this->m_umum->get_data('pelanggan'),
        );
        $this->template->load('admin/template', 'admin/transaksi', $data);
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

            $this->template->load('admin/template', 'admin/tambah_transaksi',$data);
        }
        else{

            $this->m_umum->set_data("transaksi");
            $notif = "Tambah Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('admin/transaksi');
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
            $this->template->load('admin/template', 'admin/update_transaksi',$data);
        else {
            $this->m_umum->update_data("transaksi");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('admin/transaksi');
        }
    }
  
    function delete_transaksi($id)
    {

        $this->m_umum->hapus('transaksi', 'id_transaksi', $id);
        $notif = "Data Berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect('admin/transaksi');
    }
     function detail_transaksi($id)
    {

        $data = array(
            'judul' => 'Detail transaksi',
            'id' => $id,
            'dt_detail_transaksi' => $this->m_umum->get_detail_transaksi($id),
            'a' => $this->m_umum->ambil_data('transaksi','id_transaksi',$id),
        );
        $this->template->load('admin/template', 'admin/detail_transaksi', $data);
    }
      function tambah_detail_transaksi()
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
            'dt_pengurusan' => $this->m_umum->get_data('pengurusan'),
        );
        $this->db->set('id_transaksi', 'UUID()', FALSE);
        $this->db->set('no_transaksi',$no_trx);
        $this->form_validation->set_rules('tgl_transaksi', 'tgl_transaksi', 'required');


        if ($this->form_validation->run() === FALSE) {

            $this->template->load('admin/template', 'admin/tambah_detail_transaksi',$data);
        }
        else{

            $this->m_umum->set_data("transaksi");
            $notif = "Tambah Data  Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('admin/transaksi');
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
        $this->template->load('admin/template', 'admin/pelanggan', $data);
    }
    function simpan_pelanggan()
    {

        $this->db->set('id_pelanggan', 'UUID()', FALSE);
        $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/pelanggan');
        else {

            $this->m_umum->set_data("pelanggan");
            $notif = "Tambah Data Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('admin/pelanggan');
        }
    }
    function update_pelanggan()
    {

        $this->form_validation->set_rules('id_pelanggan', 'id_pelanggan', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/pelanggan');
        else {
            $this->m_umum->update_data("pelanggan");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('admin/pelanggan');
        }
    }
    function delete_pelanggan($id)
    {

        $this->m_umum->hapus('pelanggan', 'id_pelanggan', $id);
        $notif = "Data Berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect('admin/pelanggan');
    }
    function detail_pengurusan($id)
    {

        $data = array(
            'judul' => 'Detail Pengurusan',
            'id' => $id,
            'dt_detail_pengurusan' => $this->m_umum->get_detail_pengurusan($id),
            'a' => $this->m_umum->ambil_data('pengurusan','id_pengurusan',$id),
        );
        $this->template->load('admin/template', 'admin/detail_pengurusan', $data);
    }
    function simpan_detail_pengurusan() { 
    
    $this->db->set('id_detail_pengurusan', 'UUID()', FALSE);
    $this->form_validation->set_rules('wilayah','wilayah','required');
    $id=$this->input->post('id_pengurusan');
    if($this->form_validation->run() === FALSE)
   redirect(base_url()."admin/detail_pengurusan/".$id);
    else
    {
        
        $this->m_umum->set_data("detail_pengurusan");
        $notif = "Tambah Data Berhasil";
        $this->session->set_flashdata('success', $notif);
        redirect(base_url()."admin/detail_pengurusan/".$id);
    }
  
}

function update_detail_pengurusan()
  {
        
    $this->form_validation->set_rules('id_detail_pengurusan','id_detail_pengurusan','required');
        $id=$this->input->post('id_pengurusan');
    if($this->form_validation->run() === FALSE)
        redirect(base_url()."admin/detail_pengurusan/".$id);
    else
    {
      $this->m_umum->update_data("detail_pengurusan");
       $notif = " Data berhasil diupdate";
            $this->session->set_flashdata('update', $notif);
            redirect(base_url()."admin/detail_pengurusan/".$id);
    }
    
  }

function delete_detail_pengurusan($id=NULL,$id_sk)
{
  
    $this->m_umum->hapus('detail_pengurusan','id_detail_pengurusan',$id);
     $notif = " Data berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect(base_url()."admin/detail_pengurusan/".$id_sk);
        
}
 
 
}
