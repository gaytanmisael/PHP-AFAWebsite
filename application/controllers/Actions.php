<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actions extends CI_Controller {

  public function submit() {
    $this->form_validation->set_rules('your-name', 'Name', 'trim|required|callback_alpha_space_only');
    $this->form_validation->set_rules('your-email', 'Email', 'trim|valid_email|required');
    $this->form_validation->set_rules('your-message', 'Message', 'trim|required');

    if($this->form_validation->run() == TRUE) {
      $name     = $this->input->post('your-name');
      $email    = $this->input->post('your-email');
      $subject  = $this->input->post('your-subject');
      $message  = $this->input->post('your-message');

      // Set to_email id wo whcih you want to receive mails
      $to_email = 'mgaytan@afa3.com';

      // Send mail
      $this->email->from($email, $name);
      $this->email->to($to_email);
      $this->email->subject($subject);
      $this->email->message($message);

      if($this->email->send()) {
        // Mail Sent
        echo json_encode(array('st' => 1, 'msg' => '<p>Email has been sent.</p>'));
      } else {
        echo json_encode(array('st' => 0, 'msg' => '<p>Email could not be sent.</p>'));
      }
    } else {
      echo json_encode(array('st' => 0, 'msg'=> validation_errors()));
    }
  }

  function alpha_space_only($str) {
    if(!preg_match("/^[a-zA-Z ]+$/", $str)){
      $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
      return FALSE;
    } else {
      return TRUE;
    }
  }
}
