<?php
class dosen extends CI_Controller
{
    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/dashboarddosen');
        $this->load->view('layouts/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('auth/header');
        $this->load->view('auth/login');
        $this->load->view('auth/footer');
    }
}
