<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Dashboard controller
 *
 * @package default
 * @author Adam Chamberlin
 **/
class Dashboard extends CI_Controller {
  
  /**
   * Constructor function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function __construct() {
    
    // Load the parent constructor
    parent::__construct();
  }
  
  /**
   * Index function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function index() {
    
    // Get the data
    $data['title'] = "Editor";
    
    // Load the views
    $this->load->view('templates/header', $data);
    $this->load->view('dashboard/index', $data);
    $this->load->view('templates/footer');
  }
  
} // END class Dashboard extends CI_Controller