<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')== TRUE) {
			redirect('penjualan');
		} else {
			$this->load->view('login_view');	
		}
	}

	public function login()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run()==true) {
				if ($this->login_model->login_check()==true) {
					if ($this->session->userdata('role')=='siswa') {
						redirect('pesan');
					} elseif ($this->session->userdata('role')=='penjual') {
						redirect('penjualan');
					}
				} else {
					$data['announce'] = 'Login Gagal, Silakan Coba Lagi';
					$this->load->view('login_view', $data);
				}
			} else {
				$data['announce'] = 'Login Gagal, Silakan Coba Lagi';
				$this->load->view('login_view', $data);
			}
		} else {
			$data['announce'] = 'Login Gagal, Silakan Coba Lagi';
			$this->load->view('login_view', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */