<?php

class laporantengah extends CI_Controller
{

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/laporantengah');
        $this->load->view('layouts/footer');
    }
}
