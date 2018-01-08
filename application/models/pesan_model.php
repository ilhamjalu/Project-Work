<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class Pesan_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
    	$username = $this->session->userdata('username');
    	$userID = $this->db->where('USERNAME', $username)->get('user')->row()->ID;

    	$makanan = $this->session->userdata('nakam');
    	$mangan = $this->db->where('NAMA_MENU', $nakam)->get('makan')->row();

    	$nama = $this->input->post('');
    	$makan = $this->input->post('');
    	$date = $this->input->post('');
    	$jumlah = $this->input->post('');
    }
}