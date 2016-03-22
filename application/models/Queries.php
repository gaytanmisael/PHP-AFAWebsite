<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* Name: Queries
*
* Version: 0.0.1
*
* Author: Misael Gaytan
*
* Created: 3.22.2016
*
* Description: Gets Products from MySQL Database in order to feed the product-line and product-detail Pages
*
**/

class Queries extends CI_Model {

  function get_product_lines(){
    $getProdcutLines = $this->db->query('SELECT * FROM product_lines');

    return $getProdcutLines->result();
  }

  function get_product_details($product) {
    $query = "SELECT * FROM product_detail WHERE slug='" . $product . "'";
    $getProductDetails = $this->db->query($query);

    return $getProductDetails->result();
  }
}
