<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Workspace controller
 *
 * @package default
 * @author Adam Chamberlin
 **/
class Workspace extends CI_Controller {
  
  /**
   * Constructor function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function __construct() {
    
    // Call the parent constructor
    parent::__construct();
    
    // Load the required models
    $this->load->model('site_model');
  }
  
  /**
   * Index function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function index() {
    
  }
  
  /**
   * View function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function view($id) {
    
    // Get the data
    $site = $this->site_model->get_site($id);
    $data['title'] = "Workspace";
    
    // set up basic connection
    $conn_id = ftp_connect($site->dev_ftp_server);

    // login with username and password
    $login_result = ftp_login($conn_id, $site->dev_ftp_username, $site->dev_ftp_password);

    // get contents of the current directory
    $data['contents'] = ftp_nlist($conn_id, $site->dev_ftp_path);
    
    // Load the views
    $this->load->view('templates/header', $data);
    $this->load->view('workspace/index', $data);
    $this->load->view('templates/footer');
  }
  
} // END class Workspace extends CI_Controller