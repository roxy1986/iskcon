<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/welcome
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
      $this->load->model('Enquiry_model');
 		//$this->load->model('Course_model');
		$this->load->library('form_validation');
   }
	public function index()
	{
 
		$data['all_courses'] = $this->Enquiry_model->all_enquiry();
		$this->load->view('enquiry/list',$data);
	}

	public function new_enquiry()
	{
		
		if($this->input->post('submit')) 
		{
			//print_r($this->input->post()); //exit;
			$this->form_validation->set_rules('sname', 'Student Name', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
			$this->form_validation->set_rules('education', 'Qualification', 'trim|required');
			
			$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('reffer_by', 'Reffer By', 'trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('enquiry/new');
      	}
      	else
      	{
         	
         	$result = $this->Enquiry_model->new_enquiry();
			if($result == false)
			{
				$this->session->set_flashdata('error_msg','Enquiry not added, Please try again');
      		}
      		else 
      		{
      			$this->session->set_flashdata('success_msg','Enquiry added successfully');
				$this->load->helper('sms');
				$rand_num = rand(11,99);
				$code = 'EXCL'.$rand_num;
				$mobile = $this->input->post('mobile');
				$name = $this->input->post('sname');
				$message = "Thanks for Visiting Excel Computer Classes. Your unique code is $code. Use this code to get discount on your course.";
				send_sms($mobile, $message);
      		}
      		 redirect('enquiry/new_enquiry');
      	}
      }
      else 
      {    	
			$this->load->view('enquiry/new');
		}
	}
	public function edit($enq_id = '') 
	{
		if($this->input->post('edit_enquiry'))
		{
			$this->form_validation->set_rules('sname', 'Student Name', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
			$this->form_validation->set_rules('education', 'Qualification', 'trim|required');
			
			$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('reffer_by', 'Reffer By', 'trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			$enq_id = $this->input->post('enq_id');
			if ($this->form_validation->run() == FALSE)
			{
				$data['enq_data'] = $this->Enquiry_model->view_course($enq_id);
				$this->load->view('enquiry/edit', $data );
			}
			else
			{
				$result = $this->Enquiry_model->edit_enquiry();
				if($result == false)
				{
					$this->session->set_flashdata('error_msg','Enquiry not update, Please try again');
				}
				else 
				{
					$this->session->set_flashdata('success_msg','Enquiry update successfully');
				}
				redirect('enquiry/edit/'.$enq_id);
			}
		}
		else 
		{
			$data['enq_data'] = $this->Enquiry_model->view_enquiry($enq_id);
			$this->load->view('enquiry/edit', $data );
		}
	}
	
	public function delenquiry($eid = '')
	{
		if($eid == ''){
			redirect('enquiry');
		} else {
			$result = $this->Enquiry_model->del_enq($eid);
			if($result == false)
			{
				$this->session->set_flashdata('error_msg','Enquiry not deleted, Please try again');
      		}
      		else 
      		{
				$this->session->set_flashdata('success_msg','Enquiry deleted successfully');
      		}
      		 redirect('enquiry');
		}	
	}
	public function search($sdate = '')
	{
		
 		if($this->input->post('sdate')) {
			redirect('enquiry/search/'.$this->input->post('sdate')); 		
 		}
 		if($sdate == '') {
 			redirect('enquiry');
 		}
		$data['all_courses'] = $this->Enquiry_model->search_enquiry($sdate);
		$this->load->view('enquiry/list',$data);
	}
	
	public function sendSMS()
	{
		$param['user'] = "excelc";
		$param['pass'] = "excel@12";
		$param['sender'] = 'EXLCLS';
		$param['channel'] = 'Promo';
		$param['DCS'] = 0;
		$param['flashsms'] = 0;
		$param['number'] = '919991141485';
		$param['text'] = 'tttttttttt';
		$param['route'] = 1;
		
		$request='';
		foreach($param as $key=>$val) {
		$request.= $key."=".urlencode($val);
		$request.= "&";
		}
		$request = substr($request, 0, strlen($request)-1);
		
		
		$url ="http://sms.genesissoftech.org/api/mt/SendSMS?".$request;
		echo $url.$request; die();
		$ch = curl_init();

		//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($ch);
		curl_close ($ch);

	}
  
}
