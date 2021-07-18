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
    public function berita()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/berita');
        $this->load->view('landing/footer');
    }
    public function pengumuman()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/penawaran');
        $this->load->view('landing/footer');
    }
    public function penawaran()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/pengumuman');
        $this->load->view('landing/footer');
    }
    public function program_magang()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/program_magang');
        $this->load->view('landing/footer');
    }
    public function program_kegiatanwirausaha()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/program_kegiatanwirausaha');
        $this->load->view('landing/footer');
    }
    public function program_kkn()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/program_kkn');
        $this->load->view('landing/footer');
    }
    public function program_mengajar()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/program_mengajar');
        $this->load->view('landing/footer');
    }
}
