<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
    }
   public function db_tables() 
     {
    	$tables = $this->db->list_tables();
    	return $tables;
    }
	  
}