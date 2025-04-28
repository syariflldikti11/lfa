<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

   function index(){
         
         $this->load->view('front/index');
        }
    
      function login(){
         
         $this->load->view('login/index');
        }
 
}
