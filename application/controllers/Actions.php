<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actions extends CI_Controller {

  public function submit() {
    $this->form_validation->set_rules('your-name', 'Name', 'trim|min_length[2]|required');
    $this->form_validation->set_rules('your-email', 'Email', 'trim|valid_email|required');
    $this->form_validation->set_rules('your-message', 'Message', 'trim|required');

    if($this->form_validation->run() == TRUE) {
      echo '<div class="success> Your message has been sent!</div>"';
    } else {
      echo '<div class="error">' . validation_errors() . '</div>';
    }
  }
}
