<?php


class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/dashboard_mhw');
    }
    public function dashboard()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/dashboard');
    }
    public function password()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/ganti_password');
    }
    public function infoku()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/info_akun');
    }
    public function programdiikuti()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/progdiikuti');
    }
    public function laporan_harian()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/laporan_harian');
    }
    public function laporan_tengah_tambah()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/laporan_tengah_tambah');
    }
    public function laporan_tengah_upload()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/laporan_tengah_upload');
    }
    public function laporan_tengah_status()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/laporan_tengah_status');
    }
    public function laporan_akhir_tambah()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/laporan_akhir_tambah');
    }
    public function laporan_akhir_upload()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/laporan_akhir_upload');
    }
    public function laporan_akhir_status()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/laporan_akhir_status');
    }

    public function melamar()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/melamar');
    }

    public function daftar_anggota()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/daftar_anggota');
    }

    //Dashboard Program Kegiatan
    public function kegiatan()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/dashboard');
    }

    public function dashboard_disable()
    {
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/dashboard_disable');
    }
    // public function magang()
    // {
    //     $this->load->view('mahasiswa/header');
    //     $this->load->view('mahasiswa/program/magang');
    // }
    // public function kkn()
    // {
    //     $this->load->view('mahasiswa/header');
    //     $this->load->view('mahasiswa/program/kkn');
    // }
    // public function mengajar()
    // {
    //     $this->load->view('mahasiswa/header');
    //     $this->load->view('mahasiswa/program/mengajar');
    // }
}
