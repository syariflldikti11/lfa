<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

   function index(){
          $data = array(
            'judul' => 'Dashboard',
            'jumlah_pelanggan' => $this->m_umum->hitung('pelanggan'),
            'jumlah_transaksi' => $this->m_umum->hitung('transaksi'),
            'dt_jasa' => $this->m_umum->get_jasa(),
            'c' => $this->m_umum->ambil_data('profil','id_profil',1),
            'u' => $this->m_umum->ambil_data('banner','id_banner',1)
      
            

        );
         $this->load->view('front/index',$data);
        }
    
      function login(){
         
         $this->load->view('login/index');
        }
 
}
