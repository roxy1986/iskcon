<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
    }

   public function new_course($ccode, $cname, $cfee, $duration) 
     {
      	$dd=date('Y-m-d');
   		$data = array(
    			  'course_code' => $ccode,
    			  'course_name' => $cname,
    			  'course_fee' => $cfee,
    			  'course_duration' => $duration	,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->insert('courses', $data);
			//echo $this->db->last_query(); 
			if($this->db->trans_status()==true) 
		   	{
					return true;
				}
			else 
				{
					return false;
				}
	  }
 	public function edit_course($ccode, $cname, $cfee, $duration, $course_id) 
     {
      	$dd=date('Y-m-d');
   		$data = array(
    			  'course_code' => $ccode,
    			  'course_name' => $cname,
    			  'course_fee' => $cfee,
    			  'course_duration' => $duration	,
     			  'modify_date'=>$dd
			);

			$this->db->where('id', $course_id);
			$this->db->update('courses', $data);
			
			if($this->db->trans_status()==true) 
		   	{
					return true;
				}
			else 
				{
					return false;
				}
	  }
  public function all_courses()
	{
		$result=array();
		$this->db->order_by("course_code", "ASC");
		$query = $this->db->get('courses');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function view_course($cid)
	{
		$result=array();
		$query = $this->db->get_where('courses', array('id' => $cid));
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}
		return $result;
	}
	public function chk_course_code($course_id, $course_code)
	 {
	 	$this->db->where('id!=', $course_id);
	 	$this->db->where('course_code', $course_code);
	 	$query= $this->db->get('courses');
		//echo $this->db->last_query(); exit; 
		if($query->num_rows()==0)
		{
			return true;	 
		}
		else 
		{
			return false;        		
		}    
	}
	function course_by_code($course_code)
	{
	 	$this->db->where('course_code', $course_code);
	 	$query= $this->db->get('courses');
		$data = $query->row();
		return $data->course_name;
	}
	function code_by_coursename($course_name)
	{
	 	$this->db->where('course_name', $course_name);
	 	$query= $this->db->get('courses');
		$data = $query->row();
		return $data->course_code;
	}
}