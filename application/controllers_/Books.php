<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
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
       $this->load->model('Book_model');
 		 $this->load->library('form_validation');
   }
   
	public function index()
	{ 
		$data['all_books'] = $this->Book_model->all_books();
		$this->load->view('books/list',$data);
	}

	public function new_book()
	{

		if($this->input->post('submit')) 
		{
			$this->form_validation->set_rules('bname', 'book name', 'trim|required|is_unique[books_inventory.book_name]');
			$this->form_validation->set_rules('bcode', 'book code', 'trim|required|is_unique[books_inventory.book_code]');
			$this->form_validation->set_rules('quantity', 'quantity', 'trim|required|is_natural');
		
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('books/new');
      	}
      	else
      	{
         	
         	 $result = $this->Book_model->new_book();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Book not added, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Book added successfully');
      		 }
      		 redirect('books/new_book');
      	}
      }
      else 
      {    	
			$this->load->view('books/new');
		}
	}
	
	public function edit($book_id = '') 
	{
		if($this->input->post('edit_book'))
		{
			$this->form_validation->set_rules('bname', 'book name', 'trim|required');
			$this->form_validation->set_rules('bcode', 'book code', 'trim|required');
			$this->form_validation->set_rules('quantity', 'quantity', 'trim|required|is_natural');
		
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			$book_id = $this->input->post('book_id');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$data['book_data'] = $this->Book_model->view_book($book_id);
				$this->load->view('books/edit', $data );
      	}
      	else
      	{
         	 $result = $this->Book_model->edit_book();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Book not update, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Book update successfully');
      		 }
      		 redirect('books/edit/'.$book_id);
      	}
		}
		else 
		{
			$data['book_data'] = $this->Book_model->view_book($book_id);
			$this->load->view('books/edit', $data );
		}
	}
	
	public function student_books($student_id='')
	{
			$data['student_data'] = $this->Book_model->student_books($student_id);
			$data['enrollment_no'] = $student_id;
			if($this->input->post('give_book')) 
			{
				$this->form_validation->set_rules('book_name', 'book name', 'trim|required');
				$this->form_validation->set_rules('enrollment', 'enrollment', 'trim|required');
				$enrollment = $this->input->post('enrollment');
				if ($this->form_validation->run() == FALSE)
      		{
	      		$this->load->view('books/student-books', $data);
      		}
      		else 
      		{
      			$result = $this->Book_model->add_student_book();
					if($result == false)
				 	{
						$this->session->set_flashdata('error_msg','Student Book not added, Please try again');
      		 	}
      		 	else 
      		 	{
      		 		$this->session->set_flashdata('success_msg','Student Book added successfully');
      		 	}
      		 	redirect('books/student_books/'.$enrollment);
      		}
			}
			else 
			{
				$this->load->view('books/student-books',$data);
			}
	}
	
  public function library()
	{ 
		if($this->input->post('search')) 
			{
				$this->form_validation->set_rules('enrollment', 'enrollment', 'trim|required');
				if ($this->form_validation->run() == FALSE)
      		{
	      		$this->load->view('books/library');
      		}
      		else 
      		{
      			$enrollment = $this->input->post('enrollment');
      			$result = $this->Book_model->chk_enrollment($enrollment);
					if($result == false)
				 	{
						$this->session->set_flashdata('error_msg','This enrollment number not exists, Please try again');
						redirect('books/library');
      		 	}
      		 	else 
      		 	{
      		 		redirect('books/student_books/'.$enrollment);
      		 	}
      		 	
      		}
			}
			else 
			{
				$this->load->view('books/library');
			}
	}
	public function export_data()
	{
		
		// Load the DB utility class
	$this->load->dbutil();

	// Backup your entire database and assign it to a variable
	$backup = $this->dbutil->backup();

	// Load the file helper and write the file to your server
	$this->load->helper('file');
	write_file(base_url().'/mybackup.gz', $backup);

	// Load the download helper and send the file to your desktop
	$this->load->helper('download');
	force_download('mybackup.gz', $backup);
	}
	
	public function exp_csv()
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
