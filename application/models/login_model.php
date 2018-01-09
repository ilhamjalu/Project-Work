<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * summary
 */
class Login_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function login_check()
    {
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');

    	$query = $this->db->where('USERNAME', $username)->where('PASSWORD', $password)->get('user');

    	if ($query->num_rows()>0) {
    		$admin = $query->row_array();
    		$session = array(
    			'logged_in' => true,
    			'role' => $admin['LEVEL'],
    			'username' => $admin['USERNAME']
    		);
    		$this->session->set_userdata($session);
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    	
    }
}