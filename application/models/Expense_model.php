<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
    }

   public function new_expense() 
     {
    		$particular= $this->input->post('particular');
			$amount = $this->input->post('amount');
			$quantity = $this->input->post('quantity');
			$total= $this->input->post('total');
			$pdate= $this->input->post('pdate');
			$remark= $this->input->post('remark');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'particular' => $particular,
    			  'amount' => $amount,
    			  'quantity' => $quantity,
    			  'total_amount' => $total	,
    			  'particular_date'=> $pdate,
     			  'remark '=> $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->insert('expense', $data);
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
	  public function edit_expense() 
     {
     		$particular= $this->input->post('particular');
			$amount = $this->input->post('amount');
			$quantity = $this->input->post('quantity');
			$total= $this->input->post('total');
			$pdate= $this->input->post('pdate');
			$remark= $this->input->post('remark');
			$expense_id = $this->input->post('exp_id');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'particular' => $particular,
    			  'amount' => $amount,
    			  'quantity' => $quantity,
    			  'total_amount' => $total	,
    			  'particular_date'=> $pdate,
     			  'remark '=> $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->where('id', $expense_id);
			$this->db->update('expense', $data);
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
 
  public function all_expense()
	{
		$result=array();
		$this->db->order_by("id", "DESC");
		$query = $this->db->get('expense');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function view_expense($cid)
	{
		$result=array();
		$query = $this->db->get_where('expense', array('id' => $cid));
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}
		
	}
	
}