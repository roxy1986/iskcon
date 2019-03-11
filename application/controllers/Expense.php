<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {
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
      $this->load->model('Expense_model');
 		$this->load->library('form_validation');
   }
	public function index()
	{ 
		$data['all_courses'] = $this->Expense_model->all_expense();
		$this->load->view('expense/list',$data);
	}

	public function new_expense()
	{

		if($this->input->post('submit')) 
		{
			$this->form_validation->set_rules('particular', 'Particular Name', 'trim|required');
			$this->form_validation->set_rules('amount', 'amount', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('total', 'Total Amount', 'trim|required|is_natural_no_zero');
			
			$this->form_validation->set_rules('pdate', 'Date', 'trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('expense/new_expense');
      	}
      	else
      	{
         	
         	 $result = $this->Expense_model->new_expense();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Particular not added, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Particular added successfully');
      		 }
      		 redirect('expense/new_expense');
      	}
      }
      else 
      {    	
			$this->load->view('expense/new');
		}
	}
	public function edit($exp_id = '') 
	{
		if($this->input->post('edit_exp'))
		{
			$this->form_validation->set_rules('particular', 'Particular Name', 'trim|required');
			$this->form_validation->set_rules('amount', 'amount', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('total', 'Total Amount', 'trim|required|is_natural_no_zero');
			
			$this->form_validation->set_rules('pdate', 'Date', 'trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			$exp_id = $this->input->post('exp_id');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$data['exp_data'] = $this->Expense_model->view_course($exp_id);
				$this->load->view('expense/edit', $data );
      	}
      	else
      	{
         	 $result = $this->Expense_model->edit_expense();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Expense not update, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Expense update successfully');
      		 }
      		 redirect('expense/edit/'.$exp_id);
      	}
		}
		else 
		{
			$data['exp_data'] = $this->Expense_model->view_expense($exp_id);
			$this->load->view('expense/edit', $data );
		}
	}
	
  
}
