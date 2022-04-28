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
        
           function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('user');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
           
      public function add_faculty($data)
      {
         $sql = "INSERT INTO teachers(rank,first_name,middle_name,last_name,gender,email,address,contact,time_allocated,status)VALUES ?";
         $data = array($data);
         return $this->db->query($sql,$data);
      }


      public function display_data(){

          $this->db->select("*");
          $this->db->from("teachers");
          $query = $this->db->get();
          return  $query;
   }


     public function delete_faculty($id)
     {

          $this->db->where("fac_id",$id);
          $this->db->delete("teachers");
          return true;
     }


    
     public function get_count_faculty() {
          $this->db->select('first_name');
          $this->db->from('teachers');
          return $this->db->count_all_results();
     }


     public function update_faculty($data) {

          $this->db->where('fac_id', $data['fac_id']);
          $this->db->update('teachers', $data);
          return true;

          
       
     }

     public function add_section($data) {
          $sql = "INSERT INTO section(sec_desc)VALUES ?";
          $data = array($data);
          return $this->db->query($sql,$data);

     }
     public function display_section(){
          $this->db->select("*");
          $this->db->from("section");
          $query = $this->db->get();
          return  $query;
     }

     public function delete_section($id){

          $this->db->where("sec_id",$id);
          $this->db->delete("section");
          return true;
     }
     public function update_section($data) {

          $this->db->where('sec_id', $data['sec_id']);
          $this->db->update('section', $data);
          return true;

          
       
     }
     public function add_year($data) {
          $sql = "INSERT INTO year_list(yr_list,yr_sem)VALUES ?";
          $data = array($data);
          return $this->db->query($sql,$data);

     }
     public function display_year(){
          $this->db->select("*");
          $this->db->from("year_list");
          $query = $this->db->get();
          return  $query;
     }

     public function delete_year($id){

          $this->db->where("yr_id",$id);
          $this->db->delete("year_list");
          return true;
     }
     public function update_year($data) {

          $this->db->where('yr_id', $data['yr_id']);
          $this->db->update('year_list', $data);
          return true;

          
       
     }
}

          
  
    