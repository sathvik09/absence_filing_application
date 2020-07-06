<?php 
   class Test extends CI_Controller {
	
      public function index() {  
         if($this->uri->segment(3) == "btn"){
            $this->load->view('login');   
         }
        else if($this->uri->segment(3) == "form_val"){
            if(isset($_POST["username"])){
               $user =  $_POST["username"];
               $pass = $_POST["password"];
          
             $this->load->helper(array('form', 'url'));
    
             $this->load->library('form_validation');
             $this->form_validation->set_rules('username', 'Username', 'required');
             $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
    
             if ($this->form_validation->run() == true)
             {
               $this->load->model('model');
               $data = $this->model->getrans($user,$pass); 
               if($data->num_rows() >0)
                  $this->load->view('dashboard');
               else
                 $this->load->view('login');    
          }
          else{
             $this->load->view('login'); 
          }
         }
         }
         else
         $this->load->view('landing_page');

      } 

      public function form_val(){
       
   } 
}
?>