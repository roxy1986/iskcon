<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income extends CI_Controller {
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
      $this->load->model('Income_model');
 		$this->load->library('form_validation');
   }
	public function index()
	{ 
		$data['all_courses'] = $this->Income_model->all_income();
		$this->load->view('income/list',$data);
	}

	public function new_income()
	{

		if($this->input->post('submit')) 
		{
			$this->form_validation->set_rules('particular', 'Particular Name', 'trim|required');
			$this->form_validation->set_rules('amount', 'amount', 'trim|required|is_natural_no_zero');
			//$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|is_natural_no_zero');
			//$this->form_validation->set_rules('total', 'Total Amount', 'trim|required|is_natural_no_zero');
			
			$this->form_validation->set_rules('pdate', 'Date', 'trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('income/new_income');
      	}
      	else
      	{
         	
         	 $result = $this->Income_model->new_income();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Particular not added, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Particular added successfully');
      		 }
      		 redirect('income/new_income');
      	}
      }
      else 
      {    	
			$this->load->view('income/new');
		}
	}
	public function edit($exp_id = '') 
	{
		if($this->input->post('edit_exp'))
		{
			$this->form_validation->set_rules('particular', 'Particular Name', 'trim|required');
			$this->form_validation->set_rules('amount', 'amount', 'trim|required|is_natural_no_zero');
			//$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|is_natural_no_zero');
			//$this->form_validation->set_rules('total', 'Total Amount', 'trim|required|is_natural_no_zero');
			
			$this->form_validation->set_rules('pdate', 'Date', 'trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			$exp_id = $this->input->post('exp_id');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$data['exp_data'] = $this->Income_model->view_course($exp_id);
				$this->load->view('income/edit', $data );
      	}
      	else
      	{
         	 $result = $this->Income_model->edit_income();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Income not update, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Income update successfully');
      		 }
      		 redirect('income/edit/'.$exp_id);
      	}
		}
		else 
		{
			$data['exp_data'] = $this->Income_model->view_income($exp_id);
			$this->load->view('income/edit', $data );
		}
	}
	
  
}
