<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penjualan extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'penjualan_view';
		$this->load->view('template_view', $data);
	}

}

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */