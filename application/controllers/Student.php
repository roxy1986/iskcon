<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
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
		$this->load->model('Student_model');
 		$this->load->library('form_validation');
   }
	public function index()
	{
 
		$data['all_students'] = $this->Student_model->all_students();
		$this->load->view('student/list',$data);
	}

	public function new_student()
	{
		if($this->input->post('register')) 
		{
			$this->form_validation->set_rules('enrollement', 'Enrollement Number', 'trim|required');
			$this->form_validation->set_rules('sname', 'Student Name', 'trim|required');
		
			$this->form_validation->set_rules('fname', 'Father Name', 'trim|required');
//			$this->form_validation->set_rules('caste_name', 'Student Caste', 'trim|required');
			$this->form_validation->set_rules('gender', 'Student Gender', 'trim|required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
			
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
			//$this->form_validation->set_rules('alt_mobile', 'Alternate Mobile', 'trim|is_natural_no_zero|exact_length[10]');
			//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			
			$this->form_validation->set_rules('type_of_devotee', 'Education Type', 'trim|required');
			$this->form_validation->set_rules('date_of_joining', 'Date of Joining', 'trim|required');
			//$this->form_validation->set_rules('remark', 'Remark', 'trim');
			
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('student/new');
      	}
      	else
      	{   	
         	 $result = $this->Student_model->new_student();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Student not added, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Devotee added successfully');
				$this->load->helper('sms');
				$reg_no = $this->input->post('enrollement');
				$this->load->model('Course_model');
				$course = $this->Course_model->course_by_code($this->input->post('course_name')); 
				$mobile = $this->input->post('mobile');
				$name = $this->input->post('sname');
				$student_totalfee = $this->student_totalfee($reg_no);
				$message = "Dear $name, Thanks for joining ISKCON PALWAL.Your Enrolment number is $reg_no. Be Regular for Our Sunday Program From 6 To 8 PM at Dharam Plaza, Railway Road (Near Palwal Railway Station) Palwal";
				send_sms($mobile, $message);
      		 }
      		 redirect('student/new_student');
      	}
      }
      else 
      {    	
			$this->load->view('student/new');
		}
	}
	public function edit($student_id = '') 
	{
		if($this->input->post('edit_student'))
		{
			//print_r($_POST); exit;
			$this->form_validation->set_rules('enrollement', 'Enrollement Number', 'trim|required');
			$this->form_validation->set_rules('sname', 'Student Name', 'trim|required');
		
			$this->form_validation->set_rules('fname', 'Father Name', 'trim|required');
			$this->form_validation->set_rules('gender', 'Student Gender', 'trim|required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
			
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
			//$this->form_validation->set_rules('alt_mobile', 'Alternate Mobile', 'trim|is_natural_no_zero|exact_length[10]');
			//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			
			//$this->form_validation->set_rules('type_of_devotee', 'Education Type', 'trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			$student_id = $this->input->post('student_id');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$data['student_data'] = $this->Student_model->view_student($student_id);
				$this->load->view('student/edit', $data );
      	}
      	else
      	{
         	 $result = $this->Student_model->edit_student();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Student not update, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Devotee update successfully');
      		 }
      		 		 redirect('student/edit/'.$student_id);
      	}
		}
		else 
		{
			$data['student_data'] = $this->Student_model->view_student($student_id);
			$this->load->view('student/edit', $data );
		}
	}
	
	public function view($student_id = '') 
	{
		if($this->input->post('edit_student'))
		{
			//print_r($_POST); exit;
			$this->form_validation->set_rules('enrollement', 'Enrollement Number', 'trim|required');
			$this->form_validation->set_rules('sname', 'Student Name', 'trim|required');
		
			$this->form_validation->set_rules('fname', 'Father Name', 'trim|required');
			$this->form_validation->set_rules('mname', 'Mother Name', 'trim');
			$this->form_validation->set_rules('caste_name', 'Student Caste', 'trim|required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
			
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
			$this->form_validation->set_rules('alt_mobile', 'Alternate Mobile', 'trim|is_natural_no_zero|exact_length[10]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			
			$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('course_fee', 'Course Fee', 'trim|required|is_natural');
			$this->form_validation->set_rules('tax', 'Tax', 'trim|required|is_natural');
			
			$this->form_validation->set_rules('course_duration', 'Course Duration', 'trim|required');
			$this->form_validation->set_rules('discount', 'Course Discount', 'trim|required|is_natural');
			$this->form_validation->set_rules('join_date', 'Join Date', 'trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			$student_id = $this->input->post('student_id');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$data['student_data'] = $this->Student_model->view_student($student_id);
				$this->load->view('student/view', $data );
      	}
      	else
      	{
         	 $result = $this->Student_model->edit_student();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Student not update, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Student update successfully');
      		 }
      		 		 redirect('student/view/'.$student_id);
      	}
		}
		else 
		{
			$data['student_data'] = $this->Student_model->view_student($student_id);
			$this->load->view('student/view', $data );
		}
	}
	
	
	public function ajax_load()
	{
		$course_code = $this->input->post('course_code');
		$result = $this->Student_model->ajax_load_course($course_code);
		$tax = ( $result['course_fee'] * 18)/ 100;
		$result['tax'] = $tax;
		echo json_encode($result);
	}
	
	public function fee($enrollment='')
	{		
		$result = $this->Student_model->view_student_by_enroll($enrollment);
	
		$data['student_data']= $result;
		
		$data['student_fee'] = $this->Student_model->student_fee($enrollment);
		$data['amount_deposited'] = $this->Student_model->amount_deposited($enrollment);
	
		
		if($this->input->post('submit_fee')) 
		{
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('student/fee', $data);
			}
			else 
			{
				$result = $this->Student_model->add_fee();
				if($result == false)
				{
					$this->session->set_flashdata('error_msg','Calling not added, Please try again');
				}
				else 
				{
					$this->send_notification($this->input->post('enrollement'), $result);
					$this->session->set_flashdata('success_msg','Calling added successfully');
				}
				 redirect('student/fee/'.$enrollment);
			}
		}
		else 
		{
			$this->load->view('student/fee',$data);
		}
	}	
	public function editfee($enrollment, $fee_id)
	{	
		$result = $this->Student_model->view_student_by_enroll($enrollment);
		$total_fee = $result['course_fee'] + $result['tax_amount'];
		$discount = ($total_fee * $result['course_discount']) / 100;
		$amount_to_paid= $total_fee - $discount;
		$result['discount_price'] = $discount;
		$result['amount_to_paid'] = $amount_to_paid;
		$data['student_data']= $result;
		
		$data['student_fee'] = $this->Student_model->student_fee($enrollment);
		$data['amount_deposited'] = $this->Student_model->amount_deposited($enrollment);
		$data['receipt_data'] = $this->Student_model->fee_receipt($fee_id);
	
		
		if($this->input->post('update_fee')) 
		{
			$this->form_validation->set_rules('amount_add', 'Amount Received', 'trim|required|is_natural');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			$this->form_validation->set_rules('due_date', 'Due Date', 'trim|required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('student/edit-fee', $data);
			}
			else 
			{
				$result = $this->Student_model->update_fee();
				if($result == false)
				{
					$this->session->set_flashdata('error_msg','Fee not update, Please try again');
				}
				else 
				{
					$this->session->set_flashdata('success_msg','Fee update successfully');
				}
				redirect('student/fee/'.$enrollment);
			}
		}
		else 
		{
			$this->load->view('student/edit-fee',$data);
		}
	}
	public function receipt($enrollment, $receipt_id='')
	{
		$result = $this->Student_model->view_student_by_enroll($enrollment);
		$total_fee = $result['course_fee'] + $result['tax_amount'];
		$discount = ($total_fee * $result['course_discount']) / 100;
		$amount_to_paid= $total_fee - $discount;
		$result['discount_price'] = $discount;
		$result['amount_to_paid'] = $amount_to_paid;
		$data['student_data']= $result;
		
		$data['student_fee'] = $this->Student_model->student_fee($enrollment);
		$data['amount_deposited'] = $this->Student_model->amount_deposited($enrollment);
		$data['receipt_data'] = $this->Student_model->fee_receipt($receipt_id);
		
		$this->load->library('numbertowords');
		$data['amount_words'] = $this->numbertowords->convert_number($data['receipt_data']['amount']); 
		
		@unlink(FCPATH.'tes.png');
		
		// QR code
	    $this->load->library('ciqrcode');
		$config['cacheable']	= false;
	    $qr_text = $result['enrollment'].",".$result['student_name'].",".$data['receipt_data']['amount'].",tid:".$data['receipt_data']['tid'];
		$params['data'] = $qr_text;
		$params['size'] = 2;
		$params['savename'] = FCPATH.'tes.png';
		$this->ciqrcode->initialize($config);
		$this->ciqrcode->generate($params);
		
		$this->load->view('student/receipt', $data);
		
		// End QR code
		
			
	}
	
	public function receiptView($enrollment, $receipt_id='')
	{
		$result = $this->Student_model->view_student_by_id($enrollment);
		/* $total_fee = $result['course_fee'] + $result['tax_amount'];
		$discount = ($total_fee * $result['course_discount']) / 100;
		$amount_to_paid= $total_fee - $discount;
		$result['discount_price'] = $discount;
		$result['amount_to_paid'] = $amount_to_paid; */
		$data['student_data']= $result;
		
		$data['student_fee'] = $this->Student_model->student_fee($enrollment);
		$data['amount_deposited'] = $this->Student_model->amount_deposited($enrollment);
		$data['receipt_data'] = $this->Student_model->fee_receipt($receipt_id);
		
		//$this->load->library('numbertowords');
		//$data['amount_words'] = $this->numbertowords->convert_number($data['receipt_data']['amount']); 
		
		@unlink(FCPATH.'tes.png');
		
		// QR code
	    $this->load->library('ciqrcode');
		$config['cacheable']	= false;
	    $qr_text = $result['enrollment'].",".$result['student_name'].",".$data['receipt_data']['amount'].",tid:".$data['receipt_data']['tid'];
		$params['data'] = $qr_text;
		$params['size'] = 2;
		$params['savename'] = FCPATH.'tes.png';
		$this->ciqrcode->initialize($config);
		$this->ciqrcode->generate($params);
		
		$this->load->view('student/receiptView', $data);
		
		// End QR code
		
			
	}
	
	public function test()
	{
		// QR code
		$this->load->library('ciqrcode');
		$this->load->library('ciqrcode');
	
		$params['data'] = 'This is a text to encode become QR Code';
		$params['size'] = 2;
		$params['savename'] = FCPATH.'tes.png';
		$this->ciqrcode->generate($params);
	
		echo '<img src="'.base_url().'tes.png" />';
		// End QR code	
	
	}
	public function student_totalfee($enrollment)
	{
		$result = $this->Student_model->view_student_by_enroll($enrollment);
		$total_fee = $result['course_fee'] + $result['tax_amount'];
		$discount = ($total_fee * $result['course_discount']) / 100;
		$amount_to_paid= $total_fee - $discount;
		return $amount_to_paid;
	}
	public function send_notification($enrollment, $receipt_id='')
	{
		/*$result = $this->Student_model->view_student_by_enroll($enrollment);
		$student_data= $result;
		
		$student_fee = $this->Student_model->student_fee($enrollment);
		$amount_deposited = $this->Student_model->amount_deposited($enrollment);
		$receipt_data = $this->Student_model->fee_receipt($receipt_id);
		
		$balance = $amount_to_paid - $amount_deposited;
		$this->load->model('Enquiry_model');
        $course_name = $this->Enquiry_model->course_name($student_data['course_code']);
		
		$due_date = date('d-M-Y', strtotime($receipt_data['due_date']));
		if($balance > 0) {
			$message = "Dear ".$student_data['student_name']." Thanks for depositing ".$receipt_data['amount']." INR for ".$course_name.". Your balance amount ".$balance." and due date is ". $due_date;
		} else {
			$message = "Dear ".$student_data['student_name']." Thanks for depositing ".$receipt_data['amount']." INR for ".$course_name;
		}
		$this->load->helper('sms');
		send_sms($student_data['phone'], $message);*/

	}
	
	function check_equal_less($amount, $balance) 
	{ 
		if ($amount > $balance || $amount <=0) 
		{ 
			$this->form_validation->set_message('check_equal_less', 'Wrong amount paid'); 
			return false;
		} else { 
			return true; 
		} 
	}
}
