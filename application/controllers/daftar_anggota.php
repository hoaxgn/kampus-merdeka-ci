<?php
class daftar_anggota extends CI_Controller
{
    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/daftaranggota');
        $this->load->view('layouts/footer');
    }
}
