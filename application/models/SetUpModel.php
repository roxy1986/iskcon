<?php
if (!defined('BASEPATH'))
        exit('No direct script access allowed');
class SetUpModel extends CI_Model{
    
    public function index(){
		
        
		//$condition = "paper_code = '" . $search . "'";
        $this->db->select('*');
		$this->db->from('subject_details');
		//$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
		
		
    }
	
	public function add() {
		
		if($this->input->post('paper_code') != ''){
			$data = array(
				'paper_code' => $this->input->post('paper_code'),
				'subject' => $this->input->post('subject'),
				'min_marks'=> $this->input->post('min_marks'),
				'max_marks'=> $this->input->post('max_marks'),
				'created_date' => date('Y-m-d'),
			);
			return $this->db->insert('subject_details', $data);
		}
		
		//print_r($data); die;
        
    }
	
	public function update_product($id) 
    {
		$data=array(
            'paper_code' => $id['paper_code'],
            'subject'=> $id['subject'],
			'min_marks'=> $id['min_marks'],
			'max_marks'=> $id['max_marks'],
			'modify_date'=> date('Y-m-d'),
			
        );
		
        if($id['id']==0){
			return $this->db->insert('subject_details',$data);
        }else{
			$this->db->where('id',$id['id']);
            return $this->db->update('subject_details',$data);
        }        
    }
	
	function getEqueryDet(){
		//$query = $this->db->query("SELECT e.*,co.course_name FROM enquiry as e INNER JOIN courses as co ON(co.course_code = e.course) WHERE MONTH(e.create_date) = MONTH(CURRENT_DATE()) AND YEAR(e.create_date) = YEAR(CURRENT_DATE())");
		$query = $this->db->query("SELECT * FROM `enquiry` WHERE month(`create_date`)=MONTH(CURDATE())");
		return $query->result();
	}
	
	function getEqueryFee(){
		$query = $this->db->query("SELECT * FROM  student WHERE  DATE_ADD(`dob`, INTERVAL YEAR(CURDATE())-YEAR(dob)+ IF(DAYOFYEAR(CURDATE()) > DAYOFYEAR(dob),1,0) YEAR) BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY);");
		return $query->result();
	}
	
	function getEqueryReg(){
		$query = $this->db->query("SELECT * FROM student");
		return $query->result();
	}
	
	function getEqueryCal(){
		$query = $this->db->query("SELECT * FROM  student WHERE  DATE_ADD(`date_of_anniversary`,INTERVAL YEAR(CURDATE())-YEAR(date_of_anniversary)+ IF(DAYOFYEAR(CURDATE()) > DAYOFYEAR(date_of_anniversary),1,0) YEAR) BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)");
		return $query->result();
	}
	
}
?>