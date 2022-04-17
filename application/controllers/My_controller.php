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
    public function Login($page='login'){
      if(!file_exists(APPPATH.'views/'.$page.'.php'))
        {
          show_404();
        }
	
      $this->load->view('login');
    }
    function login_validation()  
      {  
           $this->load->library('form_validation');
           $this->load->library('session'); 
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('My_model');
                if($this->My_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          
                          'username'     =>     $username
                          
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'dashboard');  
                }  
                else  
                {  
                    $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
          
      }  


    
     public function register(){
         $this->load->view('register');
     }

     public function dashboard(){

      $this->load->model('My_model');
      $data['query'] = $this->My_model->get_count_faculty();
      $this->load->view('dashboard', $data);
     }

     public function faculty(){
          

    
       $data['data']= $this->My_model->display_data();
       $this->load->view('faculty',$data);
        
     }
     public function add_faculty(){
          $data = array(
            'rank'=> $this->input->post('rank'),
            'first_name' => $this->input->post('first_name'),
            'middle_name' => $this->input->post('middle_name'),
            'last_name' => $this->input->post('last_name'),
            'gender'=>$this->input->post('gender'),
            'email'=>$this->input->post('email'),
            'address' => $this->input->post('address'),
            'contact'=>$this->input->post('contact'),
            'time_allocated'=>$this->input->post('time'),
            'status' => $this->input->post('status'),
            );
            $this->My_model->add_faculty($data);
            redirect('faculty');
        }

     

        public function delete_faculty(){

          $id=$this->input->get('fac_id');
          $response=$this->My_model->delete_faculty($id);
          if($response == true){
            redirect('faculty');
          }else{
            echo "something wrong";
          }
        }
        public function update(){
        
        // $post_data['rank'] =$this->input->post('rank');
        // $post_data['first_name'] =$this->input->post('first_name');
        // $post_data['middle_name'] =$this->input->post('middle_name');
        // $post_data['last_name'] =$this->input->post('last_name');
        // $post_data['gender'] =$this->input->post('gender');
        // $post_data['email'] = $this->input->post('email');
        // $post_data['address'] = $this->input->post('address');
        // $post_data['contact'] = $this->input->post('contact');
        // $post_data['time_allocated'] = $this->input->post('time');
        // $post_data['status'] = $this->input->post('status');
        // $result = $this->My_model->edit_faculty('teachers',$post_data, array("id" => 1));
        // if($result){
        //     echo "Faculty updated";
        // }else{
        //     echo "Faculty not updated";
        // }
      
        
        // }
        $data = array(
            'fac_id'=>$this->input->post('fac_id'),
            'rank'=>$this->input->post('rank'),
            'first_name'=>$this->input->post('first_name'),
            'middle_name'=>$this->input->post('middle_name'),
            'last_name'=>$this->input->post('last_name'),
            'gender'=>$this->input->post('gender'),
            'email'=>$this->input->post('email'),
            'address'=>$this->input->post('address'),
            'contact'=>$this->input->post('ccontact'),
            'time_allocated'=>$this->input->post('time'),
            'status'=>$this->input->post('status')

          

      
        );
          $this->My_model->update_faculty($data);
          redirect('faculty');
      }
        
    }
