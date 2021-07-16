<?php


class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/home');
        $this->load->view('landing/footer');
    }

    public function about()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/about');
        $this->load->view('landing/footer');
    }
}
