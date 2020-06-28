<?php

 class Model extends CI_Model{

    public function getrans(){
        $this->load->database();

      $q = $this->db->query("Select * from login_detail");
      return $q->result_array();
    }
 }

?>