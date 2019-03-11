<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
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
      $this->load->model('Course_model');
		$this->load->library('form_validation');
   }
	public function index()
	{
 
		$data['all_courses'] = $this->Course_model->all_courses();
		$this->load->view('courses/list',$data);
	}

	public function new_course()
	{

		if($this->input->post('new_course')) 
		{
			$this->form_validation->set_rules('ccode', 'Course Code', 'trim|required|is_unique[courses.course_code]');
			$this->form_validation->set_rules('cname', 'Course Name', 'trim|required|is_unique[courses.course_name]');
			$this->form_validation->set_rules('cfee', 'Course Fee', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('duration', 'Course Duration', 'trim|required');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('courses/new');
      	}
      	else
      	{
         	 $ccode = $this->input->post('ccode');
         	 $cname = $this->input->post('cname');
         	 $cfee =  $this->input->post('cfee');
         	 $duration =  $this->input->post('duration');
         	 $result = $this->Course_model->new_course( $ccode, $cname, $cfee, $duration );
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Course not added, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Course added successfully');
      		 }
      		 redirect('course/new_course');
      	}
      }
      else 
      {    	
			$this->load->view('courses/new');
		}
	}
	public function edit($course_id = '') 
	{
		if($this->input->post('edit_course'))
		{
			$this->form_validation->set_rules('ccode', 'Course Code', 'trim|required|callback_chk_code');
			$this->form_validation->set_rules('cname', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('cfee', 'Course Fee', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('duration', 'Course Duration', 'trim|required');
			$course_id = $this->input->post('course_id');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$data['course_data'] = $this->Course_model->view_course($course_id);
				$this->load->view('courses/edit', $data );
      	}
      	else
      	{
         	 $ccode = $this->input->post('ccode');
         	 $cname = $this->input->post('cname');
         	 $cfee =  $this->input->post('cfee');
         	 $duration =  $this->input->post('duration');
         	 $result = $this->Course_model->edit_course( $ccode, $cname, $cfee, $duration, $course_id );
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Course not added, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Course added successfully');
      		 }
      		 redirect('course/edit/'.$course_id);
      	}
		}
		else 
		{
			$data['course_data'] = $this->Course_model->view_course($course_id);
			$this->load->view('courses/edit', $data );
		}
	}
	public function chk_code($course_code)
 	{
 		 $course_id = $this->input->post('course_id');
 		 $result = $this->Course_model->chk_course_code( $course_id, $course_code);
 		 if($result)
 		 {
 		 	return true;
 		 }
 		 else
 		 {
 		 	$this->form_validation->set_message('chk_code', 'Course code already exists');
 		 	return false;
 		 }
 	}
  
}
