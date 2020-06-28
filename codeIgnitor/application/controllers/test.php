<?php 
   class Test extends CI_Controller {
	
      public function index() { 
         $this->load->model('model');
         $users = $this->model->getrans();
        

       
         $this->load->view('login'); 
      } 

      public function form_val(){
        if(isset($_POST["username"])){
            echo $_POST["username"];
         }
         $this->load->helper(array('form', 'url'));

         $this->load->library('form_validation');
         $this->form_validation->set_rules('username', 'Username', 'required');

         if ($this->form_validation->run() == true)
         {
               echo "ok";
      }
      else{
         $this->load->view('login'); 
      }
   } 
}
?>