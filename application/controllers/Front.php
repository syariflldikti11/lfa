<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

   function index(){
          $data = array(
            'judul' => 'Dashboard',
            'jumlah_pelanggan' => $this->m_umum->hitung('pelanggan'),
            'jumlah_transaksi' => $this->m_umum->hitung('transaksi'),
      
            

        );
         $this->load->view('front/index',$data);
        }
    
      function login(){
         
         $this->load->view('login/index');
        }
 
}
