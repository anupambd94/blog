<?php
class login extends MY_Controller
{
public function __construct()
  {
    parent::__construct();
    if( $this->session->userdata('id') )
    return redirect('admin/welcome');

  }
public function index()
 {
   $this->form_validation->set_rules('uname','User Name','required|alpha');
   $this->form_validation->set_rules('pass','Password','required|max_length[12]|min_length[6]');
   if($this->form_validation->run()){
     $uname=$this->input->post('uname');
     $pass=$this->input->post('pass');
     $this->load->model('AdminLoginModel');
     $user_id = $this->AdminLoginModel->isvalidate($uname,md5($pass));

     if($user_id){
       $this->session->set_userdata('id',$user_id);
       return redirect('Admin/welcome');
     }else{
       $this->session->set_flashdata('Login_faild','Invalid username/password');
       return redirect('login');
     }
   }else{
     $this->load->view('Admin/login');
     //echo validation_errors();
   }
 }

 public function formValidation(){
   $this->form_validation->set_rules('uname','User Name','required|alpha');
   $this->form_validation->set_rules('pass','Password','required|max_length[12]|min_length[6]');
   if($this->form_validation->run()){
       echo "ok";
    }
   else
     {
       return redirect('Admin/addArticle');
     }
 }

 public function register(){
   $this->load->view('Admin/register');
 }

public function sendemail()
 {



  $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
  $this->db->get('users');
  if($this->form_validation->run('add_user_rules'))
  {
      $post=$this->input->post(array('first_name', 'last_name', 'username', 'email', 'password'));
      $pass = $post['password'];
      $post['password'] = md5($pass);
      $this->load->model('AdminLoginModel','user');
      if($this->user->add_user($post))
      {
         $this->session->set_flashdata('user','Registratiion successfull. You can login now.');
         $this->session->set_flashdata('user_class','alert-success');
      }
      else
      {
        $this->session->set_flashdata('user','User not added Please try again!!');
        $this->session->set_flashdata('user_class','alert-danger');
      }
      return redirect('Admin/register');
  //   $this->load->library('email');

  //   $this->email->from(set_value('email'),set_value('fname'));
  //   $this->email->to("ajay.suneja1993@gmail.com");
  //   $this->email->subject("Registratiion Greeting..");
  //   $this->email->message("Thank  You for Registratiion");
  //   $this->email->set_newline("\r\n");
  //   $this->email->send();
  //    if (!$this->email->send()) {
  //   show_error($this->email->print_debugger()); }
  // else {
  //   echo "Your e-mail has been sent!";
  // }
  // }
    }
  else
  {
   $this->load->view('Admin/register');
  }
 }
}
?>
