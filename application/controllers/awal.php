<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}

	public function do_login()
	{
		$this->load->view('template_view');
	}
}

/* End of file awal.php */
/* Location: ./application/controllers/awal.php */