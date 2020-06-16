<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model'); //load siswamodel ke controller ini
    }

    public function index()
    {
        $data['title'] = 'Siswa Management';
        $data['user'] = $this->db->get_where('ci_users', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->Siswa_model->view();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
}
