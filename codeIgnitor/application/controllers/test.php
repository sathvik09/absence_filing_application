<?php 
   class Test extends CI_Controller {
	
      public function index() {  
         if($this->uri->segment(3) == "form_val"){
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
                  $this->load->view('landing_page');    
          }
          else{
             $this->load->view('landing_page'); 
          }
         }
         }
         else
         {$this->load->view('landing_page');}

      } 

      public function emp_add($x)
      {
         
         if($x == "emp_added"){
         if(isset($_POST["emp_id"]))
         {
            echo "here"; 
            $emp_id=$_POST["emp_id"];
            $emp_name=$_POST["emp_name"];
            $dept=$_POST["dept"];
            $designation=$_POST["designation"];
            $email=$_POST["email"];
            $mobile=$_POST["mobile"];

            $this->load->model('model');
            $this->model->gettrans1($emp_id,$emp_name,$dept,$designation,$email,$mobile);
            $this->load->view('dashboard');
            $this->load->view('add_emp');
         }
      }
      else
      {
         
        $this->load->view('dashboard');
         $this->load->view('add_emp');
      }
      
      }
      public function add_detail()
      {
         $json = file_get_contents("php://input");
         $data = json_decode($json,true);
         $this->load->model('model');
         $x =  $this->model->gettrans1($data["emp_id"],$data["emp_name"],$data["dept"],$data["designation"],$data["email"],$data["mobile"]);
         //  foreach($x as $res)
         //  {
         //     echo "ok";
         //  }
         $this->load->view('add_emp');
      }
      public function form_val(){
       
   } 

      public function render1(){
         
        $this->load->view('dashboard');
       $this->load->view('add_emp');
   }
   public function change_pass()
   {
      
      $this->load->library('form_validation');
      $this->form_validation->set_rules('old_pass', 'Old_pass', 'required|min_length[5]|max_length[12]');
      $this->form_validation->set_rules('new_pass', 'New_pass', 'required|min_length[5]|max_length[12]');
      $this->form_validation->set_rules('confirm_pass', 'Confirm_pass', 'required|min_length[5]|max_length[12]');
      
      if ($this->form_validation->run() == true)
      {
         
      $this->load->model('model');
      $data=$this->model->pass_change();
      // echo $data;
      // echo $_POST['old_pass'];
      // echo $_POST['new_pass'];
      // echo $_POST['confirm_pass'];
      if($_POST['old_pass']!=$data)
      {
         echo "Your password is incorrect";
         //$this->load->view('change_pass');
      }
      else if(isset($_POST['old_pass']))
      {
         if($_POST['new_pass']==$_POST['confirm_pass'])
         {
            
            
         $this->load->model('model');
         $this->model->update($_POST['new_pass']);
            //echo "Password changed successfully";
            
        $this->load->view('dashboard');
        $this->load->view('change_pass');
         }
         else echo "Confirm password and new password did not match";
      }
   
      }
      else {
         
        $this->load->view('dashboard');
         $this->load->view('change_pass');}
} 
}
?>