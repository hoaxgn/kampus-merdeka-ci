<?php

class v_program extends CI_Controller
{
    public function Magang()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/magang');
        $this->load->view('layouts/footer');
    }
    public function kegiatan()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/kegiatanwirausaha');
        $this->load->view('layouts/footer');
    }
    public function Kkn()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/kkn');
        $this->load->view('layouts/footer');
    }
    public function Mengajar()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/mengajar');
        $this->load->view('layouts/footer');
    }
    public function Riset()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/riset');
        $this->load->view('layouts/footer');
    }
    public function Proyek()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/proyek');
        $this->load->view('layouts/footer');
    }
    public function Studi()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/studi');
        $this->load->view('layouts/footer');
    }
    public function Pertukaran()
    {
        $this->load->view('layouts/header');
        $this->load->view('dosen/programkegiatan/pertukaran');
        $this->load->view('layouts/footer');
    }
}
