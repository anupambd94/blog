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

        if(! $this->session->userdata('id')){
          return redirect('login');
        }

        $config=[
          'base_url' => base_url('Admin/welcome'),
          'per_page' =>3,
          'total_rows' => $this->ALM->total_rows(),
          'full_tag_open' =>"<ul class='pagination pagination-sm'>",
          'full_tag_close' =>"</ul>",
          'cur_tag_open' =>"<li class='page-item active'><a class='page-link'>",
          'cur_tag_close' =>"</a></li>",
          'first_tag_open' =>"<li class='page-item'>",
          'first_tag_close' =>"</li>",
          'last_tag_open' =>"<li class='page-item'>",
          'last_tag_close' =>"</li>",
          'next_tag_open' =>"<li class='page-item'>",
          'next_tag_close' =>"</li>",
          'num_tag_open' =>"<li class='page-item'>",
          'num_tag_close' =>"</li>",
          'prev_tag_open' =>"<li class='page-item'>",
          'prev_tag_close' =>"</li>",
          'attributes' => array('class' => 'page-link','align' => 'center')



        ];

      $this->pagination->initialize($config);

      $articles=$this->ALM->articleList($config['per_page'],$this->uri->segment(3));
      $id = $this->session->userdata('id');
      $this->load->model('UserName');
      $user_name = $this->UserName->GetName();
      $this->load->view('Admin/dashboard',['articles'=>$articles,'user_name'=>$user_name]);

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
  public function Delete_article(){
    $id = $this->input->post('id');
    $this->load->model('AdminLoginModel','delete');
    $delete = $this->delete->delete_article($id);
    if($delete){
      $this->session->set_flashdata('message','Your Article Successfully deleted.');
      return redirect('Admin/welcome');

    }else{
      $this->session->set_flashdata('Deletion_faild','There some problem happend. Please try again.');
      return redirect('Admin/addArticle');
    }
  }
  public function formValidation()
   {

     if($this->form_validation->run('add_article_rules')){
       $this->load->model('AdminLoginModel');
       $post = $this->input->post();
       //print_r($post);
       $add = $this->AdminLoginModel->add_article($post);
       if($add){
         $this->session->set_flashdata('message','Your Article Successfully added.');
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
