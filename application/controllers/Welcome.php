<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
      
   }
	public function index()
	{
		if(isset($this->session->userdata['logged_in'])) 
      {
      	redirect('user/dashboard');
     	}
		$this->load->view('index');
	}
	public function login()
	{
		if($this->input->post('login_now')) 
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('index');
      	}
      	else
      	{
         	 $this->load->model('User_model');
             $result = $this->User_model->login_chk($this->input->post('email'),$this->input->post('password'));
				 if($result == false)
				 {
						$this->load->view('index');
      		 }
      		 else 
      		 {
      		 	$this->session->set_userdata('logged_in', $result);
      		 	redirect('user/dashboard');
      		 }
      	}
      }
      else 
      {    	
			$this->load->view('index');
		}
	}
}
