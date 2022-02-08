<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {
    public function _construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->library('session');
      $this->load->library('form_validation');
     
    }
    public function index(){
        $this->load->view('login');
   
}
    public function Login ($page='login')
    {

        if(!file_exists(APPPATH.'views/'.$page.'.php'))
        {
          show_404();
        }
		$this->load->view('login');
     }
    
     public function register(){
         $this->load->view('register');
     }
}