<?php
class Admin extends MY_Controller{

  public function login(){

    $this->form_validation->set_rules('uname','User Name','required|alpha');
    $this->form_validation->set_rules('pass','Password','required|max_length[12]|min_length[6]');
    if($this->form_validation->run()){
      $uname=$this->input->post('uname');
      $pass=$this->input->post('pass');
      $this->load->model('AdminLoginModel');
      $user_id = $this->AdminLoginModel->isvalidate($uname,$pass);

      if($user_id){
        $this->session->set_userdata('id',$user_id);
        return redirect('Admin/welcome');
      }else{
        $this->load->view('Admin/login');
        echo "Incorrect username or password";
      }
    }else{
      $this->load->view('Admin/login');
      //echo validation_errors();
    }
  }

  public function welcome(){

        $this->load->model('AdminLoginModel','ALM');
        $articles=$this->ALM->articleList();
        $id = $this->session->userdata('id');
        $this->load->model('UserName');
        $user_name = $this->UserName->GetName();
        $this->load->view('Admin/dashboard',['articles'=>$articles,'user_name'=>$user_name]);

        if(! $this->session->userdata('id')){
          return redirect('Admin/login');
        }

  }

  public function __construct(){
    parent::__construct();

  }

  public function logout(){
    $this->session->unset_userdata('id');
    return redirect('Admin/login');
  }

  public function register(){
    $this->load->view('Admin/register');
  }


  public function sendEmail(){
    $query = $this->db->get('users');
    $this->form_validation->set_rules('fname','First Name','required|alpha_numeric_spaces');
    $this->form_validation->set_rules('lname','last Name','required|alpha');
    $this->form_validation->set_rules('uname','User Name','required|alpha|is_unique[users.username]');
    $this->form_validation->set_rules('email','Email','required|is_unique[users.email]|valid_email');
    $this->form_validation->set_rules('pass','Password','required|max_length[12]|min_length[6]');
    $this->form_validation->set_rules('cpass','Comfirm Password','matches[pass]');

    if($this->form_validation->run()){
      echo "Check your Email";
      $fname=$this->input->post('fname');
      $lname=$this->input->post('lname');
      $uname=$this->input->post('uname');
      $email=$this->input->post('email');
      $pass=$this->input->post('cpass');

      $FullName = $fname." ".$lname;

      //seding email
      $this->load->model('sendemail',"SM");
      $EmailSend = $this->SM->isEmailSend($email,$FullName);
      if($EmailSend){
        echo "An Email has been send to your account.";
      }

    }else{
      $this->load->view('Admin/register');
      //echo validation_errors();
    }
  }


}

 ?>
