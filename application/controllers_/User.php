<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
        $this->load->model('User_model');
      // Your own constructor code
   }
	public function index()
	{
		$this->load->view('dashboard');
	}
	
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect(base_url());
	}
	public function password()
	{

		if($this->input->post('change_password')) 
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('opass', 'Old Password', 'trim|required|callback_my_password');
			$this->form_validation->set_rules('npass', 'New Password', 'trim|required');
			$this->form_validation->set_rules('cpass', 'Confirm Password', 'trim|required|matches[npass]');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('password');
      	}
      	else
      	{
         	 $this->load->model('User_model');
         	 $user_id=$this->session->userdata['logged_in']['user_id'];
             $result = $this->User_model->password($user_id, $this->input->post('npass'));
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Password not changed, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Password changed successfully');
      		 }
      		 redirect('user/password');
      	}
      }
      else 
      {    	
			$this->load->view('password');
		}
	}
  	public function my_password($password)
 	{
 		 $this->load->library('form_validation');
 		 $user_id = $this->session->userdata['logged_in']['user_id'];
 		 $result = $this->User_model->chk_password($user_id, $password);
 		 if($result)
 		 {
 		 	return true;
 		 }
 		 else
 		 {
 		 	$this->form_validation->set_message('my_password', 'Invalid old password');
 		 	return false;
 		 }
 	}
}
