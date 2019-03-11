<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
    }

   public function new_enquiry() 
     {
    		$sname= $this->input->post('sname');
			$address= $this->input->post('address');
			$mobile= $this->input->post('mobile');
			$edu= $this->input->post('education');
			$course= $this->input->post('course_name');
			$reffer_by= $this->input->post('reffer_by');
			$remark= $this->input->post('remark');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'student_name' => $sname,
    			  'address' => $address,
    			  'mobile' => $mobile,
    			  'education' => $edu	,
    			  'course'=> $course,
    			  'reffer_by '=> $reffer_by,
    			  'remark '=> $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->insert('enquiry', $data);
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
	  public function edit_enquiry() 
     {
    		$sname= $this->input->post('sname');
			$address= $this->input->post('address');
			$mobile= $this->input->post('mobile');
			$edu= $this->input->post('education');
			$course= $this->input->post('course_name');
			$reffer_by= $this->input->post('reffer_by');
			$remark= $this->input->post('remark');
			$enquiry_id = $this->input->post('enq_id');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'student_name' => $sname,
    			  'address' => $address,
    			  'mobile' => $mobile,
    			  'education' => $edu	,
    			  'course'=> $course,
    			  'reffer_by '=> $reffer_by,
    			  'remark '=> $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->where('id', $enquiry_id);
			$this->db->update('enquiry', $data);
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
 
  public function all_enquiry()
	{
		$result=array();
		$this->db->order_by("id", "DESC");
		$query = $this->db->get('enquiry');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function view_enquiry($cid)
	{
		$result=array();
		$query = $this->db->get_where('enquiry', array('id' => $cid));
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}
		return $result;
	}
	public function course_name($code)
	{
		$this->db->select('course_name');
		$this->db->from('courses');
		$this->db->where('course_code',$code);
		$query = $this->db->get();
		$data=$query->row();
		return $data->course_name;
		
	}
	
	public function search_enquiry($sdate)
	{
		$result=array();
		$this->db->where('create_date', $sdate);
		$this->db->order_by("id", "DESC");
		$query = $this->db->get('enquiry');
		//echo $this->db->last_query(); exit; 
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function del_enq($eid)
	{
		$this->db->where('id', $eid);
		$this->db->delete('enquiry');
		if($this->db->affected_rows() > 0 )
			return true;
		else 
			return false;
	}
}