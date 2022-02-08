<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
	class My_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
               $this->load->helper('url');
               $this->load->helper('form');
               $this->load->library('session');
               $this->load->library('form_validation');
		}
    }