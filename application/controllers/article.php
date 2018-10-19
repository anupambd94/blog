<?php
class Article extends MY_Controller
{

public function index()
 {
   $this->form_validation->set_rules('uname','User Name','required|alpha');
   $this->form_validation->set_rules('pass','Password','required|max_length[12]|min_length[6]');
   if($this->form_validation->run()){
     echo 'ok';
   }else{
     $this->load->view('Admin/addArticle');
     //echo validation_errors();
   }
 }


}
?>
