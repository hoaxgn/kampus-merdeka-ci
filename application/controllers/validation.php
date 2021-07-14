<?php

class validation extends CI_Controller
{

    public function index()
    {

        $this->load->view('layouts/header');
        $this->load->view('dosen/validation');
        $this->load->view('layouts/footer');
    }
}
