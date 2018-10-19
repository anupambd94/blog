<?php

class UserName extends CI_Model{



  public function GetName(){
   $user_id= $this->session->userdata('id');
    $q = $this->db->select('first_name, last_name')
                  ->from('users')
                  ->where(['id'=>$user_id])
                  ->get();

    return $q->result();
  }



}

 ?>
