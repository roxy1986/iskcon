<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
    }

   public function new_income() 
     {
    		$particular= $this->input->post('particular');
			$amount = $this->input->post('amount');
			$pdate= $this->input->post('pdate');
			$remark= $this->input->post('remark');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'particular' => $particular,
    			  'amount' => $amount,
    			  'particular_date'=> $pdate,
     			  'remark '=> $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->insert('income', $data);
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
	  public function edit_income() 
     {
     		$particular= $this->input->post('particular');
			$amount = $this->input->post('amount');
			$pdate = $this->input->post('pdate');
			$remark = $this->input->post('remark');
			$expense_id = $this->input->post('exp_id');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'particular' => $particular,
    			  'amount' => $amount,
    			  'particular_date'=> $pdate,
     			  'remark '=> $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->where('id', $expense_id);
			$this->db->update('income', $data);
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
 
  public function all_income()
	{
		$result=array();
		$this->db->order_by("id", "DESC");
		$query = $this->db->get('income');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function view_income($cid)
	{
		$result=array();
		$query = $this->db->get_where('income', array('id' => $cid));
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}
		
	}
	
}