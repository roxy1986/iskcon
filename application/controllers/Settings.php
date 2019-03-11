<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
   {
       parent::__construct();
       is_logged_in();
       $this->load->model('Setting_model');
 		 $this->load->library('form_validation');
   }
   
	public function index()
	{ 
		$data['all_tabels'] = $this->Setting_model->db_tables();
		$this->load->view('settings/new',$data);
	}
	
	public function csv_export()
	{
		if($this->input->post('submit')) 
		{
			$this->form_validation->set_rules('tbl_name', 'Table Name', 'trim|required');
				
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$data['all_tabels'] = $this->Setting_model->db_tables();
				$this->load->view('settings/new',$data);
      	}
      	else
      	{
         	$table_name = $this->input->post('tbl_name');
         	$this->load->dbutil();
				$this->load->helper('file');
				$this->load->helper('download');
				$q =  $this->db->get($table_name);
				$delimiter = ",";
				$nuline    = "\r\n";

				force_download($table_name.'.csv', $this->dbutil->csv_from_result($q, $delimiter, $nuline));
      	}
      	
      }
		
	}
	public function csv_exportxxxx()
	{
			
		$this->load->dbutil();
		$this->load->helper('file');
		$this->load->helper('download');
		$q =  $this->db->get('student');
		$delimiter = ",";
		$nuline    = "\r\n";

		force_download('student'.'.csv', $this->dbutil->csv_from_result($q, $delimiter, $nuline));
	}
	
}
