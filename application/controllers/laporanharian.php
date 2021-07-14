<?php

class laporanharian extends CI_Controller
{

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/laporanharian');
        $this->load->view('layouts/footer');
    }
}
