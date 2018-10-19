<?php
class Admin extends MY_Controller{

  public function index(){
    return redirect('login');
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


  


}

 ?>
