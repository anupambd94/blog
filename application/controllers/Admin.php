<?php
class Admin extends MY_Controller{

  public function index(){
    if( ! $this->session->userdata('id') )
    return redirect('login');
    else
    return redirect('admin/welcome');
  }
  public function __construct()
  {
    parent::__construct();
    if( ! $this->session->userdata('id') )
    return redirect('login');

  }

  public function welcome(){

        $this->load->model('AdminLoginModel','ALM');
        $articles=$this->ALM->articleList();
        $id = $this->session->userdata('id');
        $this->load->model('UserName');
        $user_name = $this->UserName->GetName();
        $this->load->view('Admin/dashboard',['articles'=>$articles,'user_name'=>$user_name]);

        if(! $this->session->userdata('id')){
          return redirect('login');
        }

  }


  public function logout()
  {
    $this->session->unset_userdata('id');
    return redirect('login');
  }

  public function register(){
    $this->load->view('Admin/register');
  }

  public function addArticle(){

    $this->load->model('UserName');
    $user_name = $this->UserName->GetName();
    $this->load->view('Admin/add_article',['user_name'=>$user_name]);
  }

  public function formValidation()
   {

     if($this->form_validation->run('add_article_rules')){
       $this->load->model('AdminLoginModel');
       $post = $this->input->post();
       //print_r($post);
       $add = $this->AdminLoginModel->add_article($post);
       if($add){
         return redirect('Admin/welcome');
       }else{
         $this->session->set_flashdata('Insertion_faild','There some problem happend. Please try again.');
         return redirect('Admin/addArticle');
       }
     }else{

       $this->load->model('UserName');
       $user_name = $this->UserName->GetName();
       $this->load->view('Admin/add_article',['user_name'=>$user_name]);
       //echo validation_errors();
     }
   }







}

 ?>
