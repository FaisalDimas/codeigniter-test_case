<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'auth');
        $this->auth->cek_login();
    }

    public function index()
    {
        $this->load->view('admin/index');
    }
}