<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Pesan_model');
    }

	public function index()
	{
		$data['main_view'] = 'pesan_view';
		$this->load->view('template_view', $data);	
	}


	/*public function tambah()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('kantin', 'Nama Kantin', 'trim|required');
			$this->form_validation->set_rules('maem', 'Nama Makanan', 'trim|required');
			$this->form_validation->set_rules('meow', 'Jumlah', 'trim|required');

			
			
		}
	}*/

}

/* End of file pesan.php */
/* Location: ./application/controllers/pesan.php */