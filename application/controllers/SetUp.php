<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SetUp extends CI_Controller {

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
	 
	public function __construct() {
		//load database in autoload libraries 
		parent::__construct(); 
		$this->load->model('SetUpModel');         
		$this->load->helper('url');
	}
	
	
   public function index()
   {
       $setUp=new SetUpModel;
       $data['data']=$setUp->index();
      // $this->load->view('includes/header');       
       $this->load->view('SetUp/index',$data);
      // $this->load->view('includes/footer');
   }
   public function add(){
		$setUp=new SetUpModel;
		$this->load->view('SetUp/add');
		$result = $setUp->add();
		//$this->load->view('includes/header');
   if($result != ''){
	   redirect(base_url('index.php/SetUp'));
	   
   }
		 
		//$this->load->view('includes/footer');      
   }
   
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $data = $this->db->get_where('subject_details', array('id' => $id))->row();
       //$this->load->view('includes/header');
       $this->load->view('SetUp/edit',array('data'=>$data));
       //$this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update()
   {
	   $dataArr = array(
		'id' => $this->input->post('id'),
		'paper_code' => $this->input->post('paper_code'),
		'subject' => $this->input->post('subject'),
		'min_marks' => $this->input->post('min_marks'),
		'max_marks' => $this->input->post('max_marks')
		);
	   $SetUp=new SetUpModel;
       $SetUp->update_product($dataArr);
       redirect(base_url('index.php/SetUp'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('subject_details');
       redirect(base_url('index.php/SetUp'));
   }
   
   public function enqUser()
   {
	   $setUp=new SetUpModel;
	   $data = array();
	   $getValEng = $setUp->getEqueryDet();
	   $getResultEnq = json_decode(json_encode($getValEng), True);
	   $data = array(
		'dadaArr' => $getResultEnq
	   );
		$this->load->view('SetUp/enqUser',$data);   
   }
   
   public function regUser()
   {
	   $setUp=new SetUpModel;
	   $data = array();
	   $getValReg = $setUp->getEqueryReg();
	   $getResultReg = json_decode(json_encode($getValReg), True);
	   //echo '<pre>'; print_r($getResultReg);
	   $data = array(
		'dataArr' => $getResultReg
	   );
		$this->load->view('SetUp/regUser',$data);   
   }
   
   public function feeUser()
   {
	   $setUp=new SetUpModel;
	   $data = array();
	   $getValFee = $setUp->getEqueryFee();
	   $getResultFee = json_decode(json_encode($getValFee), True);
	   $data = array(
		'dataArr' => $getResultFee
	   );
	   $this->load->view('SetUp/feeUser',$data);
   }
   
   public function calUser()
   {
	   $setUp=new SetUpModel;
	   $data = array();
	   $getValCal = $setUp->getEqueryCal();
	   $getResultCal = json_decode(json_encode($getValCal), True);
	   //echo '<pre>'; print_r($getResultCal);
	   $data = array(
		'dataArr' => $getResultCal
	   );
	   $this->load->view('SetUp/calUser',$data);
   }
   
	
	
	
}
