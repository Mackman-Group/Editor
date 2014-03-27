<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sites controller
 *
 * @package default
 * @author Adam Chamberlin
 **/
class Sites extends CI_Controller {
  
  /**
   * constructor function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function __construct() {
    
    // Call the parent constructor
    parent::__construct();
    
    // Load the required model
    $this->load->model('site_model');
  }
  
  /**
   * index function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function index() {
    
    // Get the data
    $data['sites'] = $this->site_model->get_sites();
    $data['title'] = "All Sites";
    
    // Load the views
    $this->load->view('templates/header', $data);
    $this->load->view('sites/index', $data);
    $this->load->view('templates/footer');
  }
  
} // END class Sites extends CI_Controller