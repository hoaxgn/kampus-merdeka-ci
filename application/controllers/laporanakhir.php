<?php

class laporanakhir extends CI_Controller
{

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/laporanakhir');
        $this->load->view('layouts/footer');
    }
}
