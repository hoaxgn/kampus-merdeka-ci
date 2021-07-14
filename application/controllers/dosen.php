<?php
class dosen extends CI_Controller
{
    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/dashboarddosen');
        $this->load->view('layouts/footer');
    }
}
