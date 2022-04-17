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
}

          
  
    