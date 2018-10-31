<?php

$config = array(
        'add_article_rules' => array(
                array(
                        'field' => 'article_title',
                        'label' => 'Article Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'article_body',
                        'label' => 'Article Body',
                        'rules' => 'required|max_length[1200]|min_length[6]'
                )
        ),
        'add_user_rules' => array(
                array(
                        'field' => 'first_name',
                        'label' => 'First Name',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'last_name',
                        'label' => 'Last Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required|alpha|is_unique[users.username]'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email|is_unique[users.email]'
                ),
                array(
                        'field' => 'cpassword',
                        'label' => 'Confirm Password',
                        'rules' => 'required|matches[password]'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|max_length[12]|min_length[6]'
                )
        ),
        'email' => array(
                array(
                        'field' => 'emailaddress',
                        'label' => 'EmailAddress',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'message',
                        'label' => 'MessageBody',
                        'rules' => 'required'
                )
        )
);

 ?>
