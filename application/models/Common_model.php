<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

       public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

 		 public function all_refferby()
		  {
		  		$result=array();
				$query = $this->db->get('reffer_by');
				foreach ($query->result_array() as $row)
				 {
       			 $result[]=$row;
				 }
				return $result;
		  }
		 public function all_castes()
		  {
		  		$result=array();
				$query = $this->db->get('caste');
				foreach ($query->result_array() as $row)
				 {
       			 $result[]=$row;
				 }
				return $result;
		  }
}