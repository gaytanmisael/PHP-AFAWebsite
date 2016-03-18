<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

  public function index() {
    $data['main_content'] = 'home_page';
    $data['title']        = 'Home';
    $data['onlineStore']  = 'yes';
    $this->load->view('includes/template', $data);
  }

  function about_us() {
    $data['main_content'] = 'about_us';
    $data['title']        = 'About Us';
    $data['onlineStore']  = 'yes';
    $this->load->view('includes/template', $data);
  }

  function contact_us() {
    $data['main_content'] = 'contact_us';
    $data['title']        = 'Contact Us';
    $data['onlineStore']  = 'no';
    $this->load->view('includes/template', $data);
  }

  function submit() {

    $this->form_validation->set_rules('your-name', 'Your Name', 'required|min_legth[5]|max_length[12]');
    $this->form_validation->set_rules('your-email', 'Your Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('your-message', 'Your Message', 'required');

    if($this->form_validation->run()) {
      // Do whatever is neede to process the form and store the data

      $data['no_error'] = $this->processing_tasks();
      if(IS_AJAX) {
        echo $data['no_error'];
      } else {
        echo 'Oops';
      }
    } else {
      // The form is not valid
      if(IS_AJAX) {
        echo 'Not Valid Form';
      }
    }
  }

}
