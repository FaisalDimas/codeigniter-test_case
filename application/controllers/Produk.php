<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'produk');
        $this->load->model('Auth_model', 'auth');
        $this->auth->cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Daftar Produk';
        $data['produk'] = $this->produk->getProduk();
        $this->load->view('produk/index', $data);
    }

    public function ProdukById($id)
    {
        $data = $this->produk->getProdukById($id);
        echo json_encode($data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required|is_unique[produk.nama]', [
            'required' => 'Kolom nama wajib diisi!',
            'is_unique' => 'Nama produk sudah digunakan!'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric', [
            'required' => 'Kolom harga wajib diisi!',
            'numeric' => 'Kolom harga wajib menggunakan angka!'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required', [
            'required' => 'Kolom deskripsi wajib diisi!'
        ]);

        if ($this->form_validation->run() == TRUE) {
            //upload file
            $config['upload_path'] = './assets/img/produk/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                // jika ada file foto
                if ($this->produk->tambahProduk($this->upload->data()) == false) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk baru ditambahkan!</div>');
                    redirect('produk');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Produk gagal ditambahkan!</div>');
                    redirect('produk');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Foto produk gagal upload!</div>');
                redirect('produk');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>');
            redirect('produk');
        }
    }

    public function ubah()
    {
        $this->form_validation->set_rules('ubah_nama', 'Nama', 'trim|required', [
            'required' => 'Kolom nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('ubah_harga', 'Harga', 'trim|required|numeric', [
            'required' => 'Kolom harga wajib diisi!',
            'numeric' => 'Kolom harga wajib menggunakan angka!'
        ]);
        $this->form_validation->set_rules('ubah_deskripsi', 'Deskripsi', 'trim|required', [
            'required' => 'Kolom deskripsi wajib diisi!'
        ]);

        if ($this->form_validation->run() == TRUE) {
            //upload file
            $config['upload_path'] = './assets/img/produk/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto') == null) {
                // jika menggunakan foto produk yang lama
                $this->produk->ubahProduk();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk berhasil diubah!</div>');
                redirect('produk');
            } elseif ($this->upload->do_upload('foto')) {
                // jika ingin mengubah foto produk
                $this->produk->ubahProduk($this->upload->data());
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk berhasil diubah!</div>');
                redirect('produk');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Foto produk gagal upload!</div>');
                redirect('produk');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>');
            redirect('produk');
        }
    }

    public function hapus($id)
    {
        $this->produk->hapusProduk($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil dihapus!</div>');
        redirect('produk');
    }
}