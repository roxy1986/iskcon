<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
		 //  $this->load->library('upload');
    }

     public function insert_attendance() 
	 {
		 $attendance = $this->input->post('attendance');
			$dd = date('Y-m-d');
			echo $attendance;
		 
	 }
   
   
	  public function edit_student() 
     {
		
		 
    		/*$enrollement = $this->input->post('enrollement');
			$sname = $this->input->post('sname');
			$fname = $this->input->post('fname');
			$dob = $this->input->post('dob');
			$address = $this->input->post('address');
			$mobile = $this->input->post('mobile');
			$alt_mobile = $this->input->post('alt_mobile');
			$email = $this->input->post('email');
			$type_of_devotee = $this->input->post('type_of_devotee');*/
			
			$attendance = $this->input->post('attendance');
			$dd = date('Y-m-d');
			echo $attendance;
      	//$student_id = $this->input->post('student_id');
      	/*
   		$data = array(
    			 /* 'enrollment ' => $enrollement,
    			  'student_name' => $sname,
    			  'father_name' => $fname,
				  'mobile' => $mobile,
    			  'attendance' => $attendance,
     			  'date_of_calling' => $dd
			);

			//$this->db->where('id', $student_id);
			$this->db->insert('attendance', $data);
			//echo $this->db->last_query(); exit; 
			if($this->db->trans_status()==true) 
		   	{
					return true;
				}
			else 
				{
					return false;
				}*/
	  }
 public function report()
	{
		echo "Report of student as follow";
	}
  public function all_students()
	{
		$result=array();
		$this->db->order_by("id", "DESC");
		$query = $this->db->get('student');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function view_student($cid)
	{
		$result=array();
		$query = $this->db->get_where('student', array('id' => $cid));
		//echo $this->db->last_query(); exit;
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}	
	}
	
	public function ajax_load_course($coure_code)
	{
		$result=array();
		$query = $this->db->get_where('courses', array('course_code' => $coure_code));
		foreach ($query->result_array() as $row)
		{
			return $row;
		}
		return $result;
	}
	
	public function view_student_by_enroll($enrollement)
	{
		$result=array();
		$query = $this->db->get_where('student', array('enrollment' => $enrollement));
		//echo $this->db->last_query(); exit;
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}	
	}
	
	public function view_student_by_id($id)
	{
		$result=array();
		$query = $this->db->get_where('student', array('id' => $id));
		//echo $this->db->last_query(); exit;
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}	
	}
	
	
	public function student_fee($enrollement)
	{
		$result=array();
		$this->db->order_by("id", "DESC");
		$query = $this->db->get_where('fee', array('enrollment' => $enrollement));
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function amount_deposited($enrollement)
	{
		/*$amount_deposit = 0;
		$query = $this->db->get_where('fee', array('enrollment' => $enrollement));
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
        $amount_deposit = $amount_deposit + $row['amount'];
		}
		return $amount_deposit;*/
	}
	
	public function add_fee()
	{
		$enrollment = $this->input->post('enrollement');
		
		$remark = $this->input->post('remark');
		$dd = date('Y-m-d');
		$tid = time();
      	
   		$data = array(
    			  'enrollment' => $enrollment,
    			  'remark' => $remark,
				  'deposite_date' => $dd
			);

		$this->db->insert('fee', $data);
		echo $this->db->last_query(); //exit; 
		if($this->db->trans_status()==true) 
		{
			return $this->db->insert_id();;
		}
		else 
		{
			return false;
		}	
	}
	
	public function update_fee()
	{
		$enrollment = $this->input->post('enrollement');
		$fee_id = $this->input->post('fee_id');
		$amount_add = $this->input->post('amount_add');
		$remark = $this->input->post('remark');
		$due_date = $this->input->post('due_date');
      	$dd = date('Y-m-d');
      	
   		$data = array(
    			  'amount' => $amount_add,
    			  'remark' => $remark,
    			  'due_date' => $due_date,
    			  'deposite_date' => $dd
			);

		$this->db->where('id', $fee_id);
		$this->db->update('fee', $data);
		//echo $this->db->last_query(); exit; 
		if($this->db->trans_status()==true) 
		{
			return true;
		}
		else 
		{
			return false;
		}	
	}
	public function fee_receipt($receipt_id)
	{
		$result=array();
		$query = $this->db->get_where('fee', array('id' => $receipt_id));
		//echo $this->db->last_query(); exit;
		foreach ($query->result_array() as $row)
		{
			return $row;
		}	
	}
	
	public function add_att($a, $c, $b){
	    $dd = date('Y-m-d');
		$tid = time();
	    $data = array(
    			  'enrollment' => $c,
    			  'attendance' => $a,
				  'date_of_calling' => $dd,
				  'stu_id' => $b
				  
			);

		$this->db->insert('attendance', $data);
	}

}