<?php

class AdminLoginModel extends CI_Model{

  public function isvalidate($username,$password){
    $q = $this->db->where(['username'=>$username,'password'=>$password])
                  ->get('users');
    if($q->num_rows()){
      return $q->row()->id;
    }else{
      return false;
    }

  }

  public function articleList(){
   $user_id = $this->session->userdata('id');
    $q = $this->db->select('id, article_title')
                  ->from('article')
                  ->where(['user_id'=>$user_id])
                  ->get();

    return $q->result();
  }



}

 ?>
