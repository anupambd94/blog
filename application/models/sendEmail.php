<?php

class sendemail extends CI_Model{

  public function isEmailSend($email,$name){
    $this->email->from("anupam.bd94@gmail.com","Anupam Hayat");
    $this->email->to($email);
    $this->email->subject("Registration Greeting.");

    $this->email->message("Thank you ".$name.", You have successfully registered");
    $this->email->set_newline("\r\n");
    $this->email->send();

    if($this->email->send()){
      return True;
    }else{
      show_error($this->email->print_debugger());
    }

  }
}

 ?>
