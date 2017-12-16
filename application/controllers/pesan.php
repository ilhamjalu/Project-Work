<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'pesan_view';
		$this->load->view('template_view', $data);	
	}

}

/* End of file pesan.php */
/* Location: ./application/controllers/pesan.php */