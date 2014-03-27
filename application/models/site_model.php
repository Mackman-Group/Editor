<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Site_model class.
 * 
 * @extends CI_Model
 */
class Site_model extends CI_Model {
  
  /**
   * __construct function
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function __construct() {
    
    // Call the parent constructor
    parent::__construct();
  }
  
  /**
   * _model_entities
   *
   * @return void
   * @author Adam Chamberlin
   **/
  protected function _model_entities() {
    // Create an array of entities
    $data = array(
      'id',
      'name',
      'dev_ftp_username',
      'dev_ftp_password',
      'dev_ftp_path',
      'prod_ftp_username',
      'prod_ftp_password',
      'prod_ftp_path',
    );
    
    // Return the array
    return $data;
  }
  
  /**
   * Create array from $_POST object
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function create_array_from_post() {
    
    // Loop through all the model entities to create an array for the database
    foreach ($this->_model_entities as $entity) {
      
      // Build the array
      $data[$entity] = ($this->input->post($entity) != '') ? $this->input->post($entity) : NULL;
    }
    
    // Return the array
    return $data;
  }
  
  /**
   * Get single site
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function get_site($id) {
    
    // Only return the client by id
    $query = $this->db->get_where('sites', array('id' => $id));
    return $query->row();
  }
  
  /**
   * Get sites
   *
   * @return void
   * @author Adam Chamberlin
   **/
  public function get_sites($options = array()) {
    
    // Qualifications of the options
    foreach($this->_model_entities() as $entity) {
      if ( isset($options[$entity]) )
        $this->db->where($entity, $options[$entity]);
    }

    // Limits and offsets
    if ( isset($options['limit']) && isset($options['offset']) ) {
      $this->db->limit($options['limit'], $options['offset']);
    } else if (isset($options['limit'])) {
      $this->db->limit($options['limit']);
    }

    // Sort and sort directions
    if ( isset($options['sort_by']) && isset($optons['sort_direction']) ) {
      $this->db->order_by($options['sort_by'], $options['sort_direction']);
    }

    // Run the query
    $query = $this->db->get('sites');

    // Return the results
    return $query->result();
  }
  
} // END class Site_model