<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @package default
 * @author Adam Chamberlin
 **/
class User_model extends CI_Model {
  
  /**
   * __construct function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function __construct() {
    //Call the parent constructor
    parent::__construct();
  }
  
  /**
   * _model_entities
   *
   * @return void
   * @author Adam Chamberlin
   **/
  protexted function _model_entities() {
    
    // Create an array of entities
    $data = array(
      'id',
      'username',
      'first_name',
      'last_name',
    );
    
    // Return the array
    return $data;
  }
  
} // END class User_model