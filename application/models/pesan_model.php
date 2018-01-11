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

   public function tambah_transaksi()
    {
        $username = $this->session->userdata('username');
        $userid = $this->db->where('USERNAME', $username)->get('user')->row()->ID;

        $datatran=array(
            'ID_TRAN' => NULL,
            'ID' => $userid,
            'TANGGAL' => date('Y-m-d')
        );

        $ndektrans = $this->db->insert('transaksi', $datatran);

        if ($this->db->affected_rows()>0) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function tambah_det()
    {
        $tran = $this->db->get('transaksi')->row()->ID_TRAN;
        $jumlah = $this->input->post('meow');

        $ket = $this->input->post('maem');
        $menu = $this->db->where('NAMA_MENU', $ket)->get('menu')->row()->ID_MENU;
        $harga = $this->db->get('menu')->row()->HARGA;

        $tt = $harga * $jumlah;

        $datadet = array(
            'ID_DETIL' => NULL,
            'ID_MENU' => $menu,
            'ID_TRANS' => $trans,
            'JUMLAH' => $jumlah,
            'TOTAL' => $tt
        );

        $ndekdet = $this->db->insert('detil_tran', $datadet);
        if ($this->db->affected_rows()>0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_dropdownkantin()
    {
        return $this->db->select('ID_KANTIN', 'NAMA_KANTIN')
                        ->get('kantin')
                        ->result();
    }

    public function getmakanan()
    {
        return $this->db->select('ID_MENU', 'NAMA_MENU')
                        ->get('menu')
                        ->result();
    }
}