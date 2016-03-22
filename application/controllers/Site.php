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

}
