<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
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
		$this->load->model('Attendance_model');
 		$this->load->library('form_validation');
   }
	public function index()
	{
 
		$data['all_students'] = $this->Attendance_model->all_students();
		$this->load->view('attendance/list',$data);
	}

	public function insert()
	{
		$data['student_data'] = $this->Attendance_model->insert_attendance();
		$this->load->view('attendance/list',$data);
	}
	
	public function sale()
	{
		$data['student_data'] = $this->Attendance_model->sale_book();
		$this->load->view('attendance/sale',$data);
	}
	public function report()
	{
		$data['student_data'] = $this->Attendance_model->report();
		$this->load->view('attendance/report',$data);
	}
	
	public function edit() 
	{
		
	      	$data['student_data'] = $this->Attendance_model->edit_student();
				//$this->load->view('attendance/edit', $data );
      	
      	 	$result = $this->Attendance_model->edit_student();
				 if($result == false)
				{
						$this->session->set_flashdata('error_msg','Unable to make attendance, Please try again');
				}
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Student Attendance successfully');
      		 }
      		 		 redirect('student/edit/'.$student_id);
      	
			$data['student_data'] = $this->Attendance_model->view_student($student_id);
	}
	
	function saveAtt(){
	    $a = $this->input->post('a');
        $c = $this->input->post('c');
        $b = $this->input->post('b');
        $data['student_data'] = $this->Attendance_model->add_att($a, $c, $b);
        print_r($a ."==". $c); die;
	}
}
