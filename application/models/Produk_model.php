<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function getProduk()
    {
        return $this->db->get('produk')->result_array();
    }

    public function getProdukById($id)
    {
        return $this->db->where('id', $id)->get('produk')->row_array();
    }

    public function tambahProduk($foto)
    {
        $data = [
            'nama'      => $this->input->post('nama'),
            'foto'      => $foto['file_name'],
            'harga'     => $this->input->post('harga'),
            'deskripsi' => $this->input->post('deskripsi')
        ];
        $this->db->insert('produk', $data);
    }

    public function ubahProduk($foto = null)
    {
        if ($foto === null) {
            $data = [
                'nama'      => $this->input->post('ubah_nama'),
                'harga'     => $this->input->post('ubah_harga'),
                'deskripsi' => $this->input->post('ubah_deskripsi')
            ];
        } else {
            $data = [
                'nama'      => $this->input->post('ubah_nama'),
                'foto'      => $foto['file_name'],
                'harga'     => $this->input->post('ubah_harga'),
                'deskripsi' => $this->input->post('ubah_deskripsi')
            ];
        }
        $this->db->where('id', $this->input->post('ubah_id'))->update('produk', $data);
    }

    public function hapusProduk($id)
    {
        $this->db->delete('produk', ['id' => $id]);
    }
}