<?php
function is_user_login()
 {
    //Get Current CI Instance
    $CI = & get_instance();
    //Use $CI instead of $this
    //Check for session details here, here's an example
    $user = $CI->session->userdata('user_id');

    //Get current controller to avoid infinite loop
    $controller = $CI->router->class;

    //Check if user session exists and you are not already on the login page
    if(empty($user) && $controller != "login" ) {
        redirect('login/', 'refresh');
    }
    else {
        return true;
    }
 }
    
function is_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $CI->session->userdata('logged_in');
    if (!isset($user['user_id']) || $user['user_id']=='') { 
    	 redirect(base_url(), 'refresh');
     } else { 
     		return true; 
     }
}
?>