<?php
//  class dashboardc extends CI_Controller
//  {
//      function render($view)
//      {
         
//          $this->load->view($view);
//      }
//  }

 class mycontroller extends CI_Controller
 {
     function abcd($var=NULL)
     {
        if(isset($var))
        {
            
        $this->load->view('dashboard');
        $this->load->view("$var");
        }
        else 
        {$this->load->view('dashboard');}
      
    }

    
     
 }

?>

