<?php

 class Model extends CI_Model{

    public function getrans($user,$pass){
        $this->load->database();
        $array = array('username' => $user, 'password' => $pass);
        $this->db->select('*');
        $this->db->from('attendence');
        $this->db->where($array);
        $query = $this->db->get();
        return $query;
    }
 }

?>