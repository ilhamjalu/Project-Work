<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('penjualan_model');
	}


	public function index()
	{
		if ($this->session->userdata('logged_in')== true) {
			$data['main_view'] = 'penjualan_view';
			$this->load->view('template_view1',$data);
		} else {
			redirect('login');
		}
	}

	/*public function input()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('kantin', 'Nama Kantin', 'trim|required');
			$this->form_validation->set_rules('makan', 'Nama Makanan', 'trim|required');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required');

			if ($this->form_validation->run()==TRUE) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';
				
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('gambar')){
					if ($this->penjualan_model->tambah_kantin($this->upload->data()) == TRUE) {
						$menu= $this->penjualan_model->tambah_menu();

						$this->session->set_flashdata('hasil','berhasil');
                    	redirect('penjualan');
					}else{
						$this->session->set_flashdata('hasil','gagal');
                      	redirect('penjualan');
					} 
				}else{
					$data['notif'] = $this->upload->display_errors();
              		$data['main_view'] = 'penjualan_view';
              		$this->load->view('template', $data);
				}
			} else {
				$data['notif'] = $this->upload->validation_errors();
              	$data['main_view'] = 'penjualan_view';
              	$this->load->view('template', $data);
			}
		} */

	//}
}


/* End of file menu.php */
/* Location: ./application/controllers/menu.php */