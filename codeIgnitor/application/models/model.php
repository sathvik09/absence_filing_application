<?php

 class Model extends CI_Model{

    public function getrans($user,$pass){
        $this->load->database();
        $array = array('username' => $user, 'password' => $pass);
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->where($array);
        $query = $this->db->get();
        return $query;
    }
    public function gettrans1($emp_id,$emp_name,$dept,$designation,$email,$mobile)
    {
        $this->load->database();
         $this->db->select_max('Slno');
       $x = $this->db->get('employee');
       $ans= $x->result_array();
       //return $ans;
       $s=0;
        foreach($ans as $res)
        {
            $s = $res["Slno"];
        }
           $s=$s+1;
        $array1= array('Slno'=>$s ,'Emp_id'=>$emp_id  ,'Emp_name'=>"$emp_name",'Department'=>"$dept",'Designation'=>"$designation",'E-mail'=>"$email",'Mobile_no'=>$mobile);
        $this->db->insert('employee', $array1);
        
    }
 }

?>