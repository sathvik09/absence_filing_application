<?php
   class Get_dropDown extends CI_Model{
      
    public function getInfo(){
        $this->load->database();
        $this->db->select('Department');
        $this->db->from('employee');
        $query = $this->db->get();
        $res = $query->result_array();
        return $res;
    }
   }

?>