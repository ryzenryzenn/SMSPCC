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
        public function section(){
          
          
          $data['data']= $this->My_model->display_section();
     
          $this->load->view('section',$data);

        }

        public function add_section(){

          $data = array(
            'sec_desc'=> $this->input->post('sec_name'),
            );
            $this->My_model->add_section($data);
            redirect('section');
        }

        public function delete_section(){
          $id=$this->input->get('sec_id');
          $response=$this->My_model->delete_section($id);
          if($response == true){
            redirect('section');
          }else{
            echo "something wrong";
          }
        }

        public function update_section(){

          $data = array(
            'sec_id'=>$this->input->post('sec_id'),
            'sec_desc'=>$this->input->post('sec_name')
      
        );
          $this->My_model->update_section($data);
          redirect('section');
        }
        public function year(){
          
          
          $data['data']= $this->My_model->display_year();
     
          $this->load->view('year',$data);

        }

        public function add_year(){

          $data = array(
            'yr_list'=> $this->input->post('year_list'),
            'yr_sem'=> $this->input->post('year_sem'),
            );
            $this->My_model->add_year($data);
            redirect('year');
        }

        public function delete_year(){
          $id=$this->input->get('yr_id');
          $response=$this->My_model->delete_year($id);
          if($response == true){
            redirect('year');
          }else{
            echo "something wrong";
          }
        }

        public function update_year(){

          $data = array(
            'yr_id'=>$this->input->post('yr_id'),
            'yr_list'=>$this->input->post('yr_list'),
            'yr_sem'=>$this->input->post('yr_sem')
      
        );
          $this->My_model->update_year($data);
          redirect('year');
        }


        public function subject(){
          $data['data']= $this->My_model->display_subject();
     
          $this->load->view('subject',$data);
         
        }
        public function add_subject(){
          $data = array(
            'subj_code'=> $this->input->post('subj_code'),
            'subj_desc'=> $this->input->post('subj_desc'),
            );
            $this->My_model->add_subject($data);
            redirect('subject');
        }

        public function update_subject(){
          $data = array(
            'subj_id'=>$this->input->post('subj_id'),
            'subj_code'=>$this->input->post('subj_code'),
            'subj_desc'=>$this->input->post('subj_desc')
      
        );
          $this->My_model->update_subject($data);
          redirect('subject');
        }

        public function delete_subject(){

          $id=$this->input->get('subj_id');
          $response=$this->My_model->delete_subject($id);
          if($response == true){
            redirect('subject');
          }else{
            echo "something wrong";
          }
        }
    }
