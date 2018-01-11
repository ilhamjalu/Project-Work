<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class Penjualan_model extends CI_Model{    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($kantin)
    {
    	$this->db->insert('kantin', $kantin);
    	return $this->db->insert_id();
    }

    public function insertmenu($menu)
    {
    	$this->db->insert('menu', $menu);
    	return $this->db->insert_id();
    }
    
    public function tambah_kantin($file)
    {
    	$username = $this->session->userdata('username');
    	$userid = $this->db->where('USERNAME', $username)->get('user')->row()->ID;


    	$datakantin = array (
    		'ID_KANTIN' => NULL,
    		'ID' => $userid,
    		'NAMA_KANTIN' => $this->input->post('kantin'),
    		'GAMBAR'=> $file['file_name']
    	);

    	$masuk = $this->db->insert('kantin', $datakantin);

    	if ($this->db->affected_rows() >0) {
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    }

    public function tambah_menu()
    {
    	
    	$kantin = $this->input->post('kantin');
    	$kantinid = $this->db->where('NAMA_KANTIN', $kantin)->get('kantin')->row()->ID_KANTIN;

    	$datamenu = array(
    		'ID_MENU' => NULL,
    		'ID_KANTIN' => $kantinid,
    		'NAMA_MENU' => $this->input->post('makan'),
    		'HARGA' => $this->input->post('harga')
    	);

    	$tts = $this->db->insert('menu', $datamenu);

    	if ($this->db->affected_rows() >0) {
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    }
}