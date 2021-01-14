<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Produk';
        $data['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('user/index', $data);
    }
}