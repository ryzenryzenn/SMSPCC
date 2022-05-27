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
     public function add_subject($data) {
          $sql = "INSERT INTO subj_list(subj_code,subj_desc)VALUES ?";
          $data = array($data);
          return $this->db->query($sql,$data);
     }

     public function display_subject() {
          $this->db->select("*");
          $this->db->from("subj_list");
          $query = $this->db->get();
          return  $query;
     }

     public function update_subject($data) {

          $this->db->where('subj_id', $data['subj_id']);
          $this->db->update('subj_list', $data);
          return true;
     }

     public function delete_subject($id) {
          $this->db->where("subj_id",$id);
          $this->db->delete("subj_list");
          return true;
     }
     
     public function get_faculty(){

          $query = $this->db->get('teachers');
          $result = $query->result();
  
          $fac_id = array('Select one');
          $last_name = array('Select one');
          
          for ($i = 0; $i < count($result); $i++)
          {
              array_push($fac_id, $result[$i]->fac_id);
              array_push($last_name, $result[$i]->last_name);
          }
          return array_combine($fac_id, $last_name);
      }

      public function get_year(){
          $query = $this->db->get('year_list');
          $result = $query->result();
  
          $yr_id = array('Select one');
          $yr_list = array('Select one');
          
          for ($i = 0; $i < count($result); $i++)
          {
              array_push($yr_id, $result[$i]->yr_id);
              array_push($yr_list, $result[$i]->yr_list);
          }
          return array_combine($yr_id, $yr_list);
      }
      public function get_sem(){
          $query = $this->db->get('year_list');
          $result = $query->result();
  
          $yr_id = array('Select one');
          $yr_sem = array('Select one');
          
          for ($i = 0; $i < count($result); $i++)
          {
              array_push($yr_id, $result[$i]->yr_id);
              array_push($yr_sem, $result[$i]->yr_sem);
          }
          return array_combine($yr_id, $yr_sem);
      }

      public function get_subject(){
          $query = $this->db->get('subj_list');
          $result = $query->result();
  
          $subj_id = array('Select one');
          $subj_code = array('Select one');
          
          for ($i = 0; $i < count($result); $i++)
          {
              array_push($subj_id, $result[$i]->subj_id);
              array_push($subj_code, $result[$i]->subj_code);
          }
          return array_combine($subj_id, $subj_code);
      }

      public function get_section(){
          $query = $this->db->get('section');
          $result = $query->result();
  
          $sec_id = array('Select one');
          $sec_desc = array('Select one');
          
          for ($i = 0; $i < count($result); $i++)
          {
              array_push($sec_id, $result[$i]->sec_id);
              array_push($sec_desc, $result[$i]->sec_desc);
          }
          return array_combine($sec_id, $sec_desc);
      }
     }


          
  
    