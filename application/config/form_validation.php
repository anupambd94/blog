<?php

$config = array(
        'add_article_rules' => array(
                array(
                        'field' => 'article_title',
                        'label' => 'Article Title',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'article_body',
                        'label' => 'Article Body',
                        'rules' => 'required|max_length[1200]|min_length[6]'
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
