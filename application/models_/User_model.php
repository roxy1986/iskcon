<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

       public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

       public function login_chk($username, $password)
        {
        		$query = $this->db->get_where('users', array('email' => $username,'password'=>$password));
        		if($query->num_rows()==0)
        		{
					return false;        		 
        		} 
        		else 
        		{
        		 	foreach ($query->result() as $row)
					{
       				return array('username'=>$row->name,'email'=>$row->email,'user_id'=>$row->uid);
					}
        		}
        }
        public function password($user_id, $newpass) 
        {
        			$dd=date('Y-m-d h:i:s');
        			$data = array(
      			  'password' => $newpass,
       			  'last_login' => $dd
					);

					$this->db->where('uid', $user_id);
					$this->db->update('users', $data);
					//echo $this->db->last_query(); exit;
					if($this->db->affected_rows()==1) 
					{
						return true;
					}
					else 
					{
						return false;
					}
	     }
	    public function chk_password($user_id, $oldpass)
	     {
				$query = $this->db->get_where('users', array('uid' => $user_id,'password'=>$oldpass));
        		if($query->num_rows()==1)
        		{
        			return true;	 
        		}
        		else 
        		{
					return false;        		
        		}    
	     }
}