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
            

        );
        $this->template->load('admin/template', 'admin/home', $data);
    }
      function daftar_baru()
    {

        $data = array(
            'judul' => 'Daftar Baru',
            'dt_daftar_baru' => $this->m_umum->get_data('daftar_baru'),
        );
        $this->template->load('admin/template', 'admin/daftar_baru', $data);
    }
    function simpan_daftar_baru()
    {

        $this->db->set('id_daftar_baru', 'UUID()', FALSE);
        $this->form_validation->set_rules('wilayah', 'wilayah', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/daftar_baru');
        else {

            $this->m_umum->set_data("daftar_baru");
            $notif = "Tambah Data Berhasil";
            $this->session->set_flashdata('success', $notif);
            redirect('admin/daftar_baru');
        }
    }
    function update_daftar_baru()
    {

        $this->form_validation->set_rules('id_daftar_baru', 'id_daftar_baru', 'required');
        if ($this->form_validation->run() === FALSE)
            redirect('admin/daftar_baru');
        else {
            $this->m_umum->update_data("daftar_baru");
            $notif = " Update Data Dokumen Berhasil";
            $this->session->set_flashdata('update', $notif);
            redirect('admin/daftar_baru');
        }
    }
    function delete_daftar_baru($id)
    {

        $this->m_umum->hapus('daftar_baru', 'id_daftar_baru', $id);
        $notif = "Data Berhasil dihapuskan";
        $this->session->set_flashdata('delete', $notif);
        redirect('admin/daftar_baru');
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
