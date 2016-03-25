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

  function events() {
    $data['main_content']        = 'events';
    $data['title']               = 'Events';
    $data['onlineStore']         = 'yes';
    $this->load->view('includes/template', $data);
  }

  function product_lines() {

    $this->load->model('queries');
    $get_product_lines = $this->queries->get_product_lines();

    $data['get_product_lines']  = $get_product_lines;
    $data['main_content']       = 'product_lines';
    $data['title']              = 'Product Lines';
    $data['onlineStore']        = 'yes';
    $this->load->view('includes/template', $data);
  }

  function product_detail($product){

    $this->load->model('queries');
    $get_product_details = $this->queries->get_product_details($product);

    $data['product_details']    = $get_product_details;
    $data['product']            = $product;
    $data['main_content']       = 'product_detail';
    $data['title']              = 'Product Details';
    $data['onlineStore']        = 'yes';
    $this->load->view('includes/template', $data);
  }

  function california_gold() {
    $data['main_content']     = 'california_gold';
    $data['title']            = 'California Gold';
    $data['onlineStore']      = 'no';
    $this->load->view('includes/template', $data);
  }

  function contact_us() {
    $data['main_content'] = 'contact_us';
    $data['title']        = 'Contact Us';
    $data['onlineStore']  = 'no';
    $this->load->view('includes/template', $data);
  }
}
