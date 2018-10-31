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

  public function articleList($limit,$offset){
   $user_id = $this->session->userdata('id');
    $q = $this->db->select('id, article_title')
                  ->from('article')
                  ->where(['user_id'=>$user_id])
                  ->limit($limit,$offset)
                  ->get();

    return $q->result();
  }

  public function add_article($array){
    $this->db->insert('article',$array);
    return True;
  }

  public function delete_article($id){
    $this->db->delete('article',['id'=>$id]);
    return True;
  }


  public function add_user($array){
    $this->db->insert('users',$array);
    return True;
  }
  public function total_rows(){
    $id=$this->session->userdata('id');
    $q=$this->db->select()
                ->from('article')
                ->where(['user_id'=>$id])
                ->get();

    return $q->num_rows();
  }



}

 ?>
