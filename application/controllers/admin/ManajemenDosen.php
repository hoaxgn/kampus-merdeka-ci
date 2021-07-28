<?php

class ManajemenDosen extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        $this->load->model('A_dosen');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Dosen';
        $data['dosen'] = $this->A_dosen->getAllDosen();
        if ($this->input->post('keyword')) {
            $data['dosen'] = $this->A_dosen->cariDataDosen();
        }
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/manajemen_data/dosen', $data);
        $this->load->view('admin/template/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'tambah Dosen';
        $this->form_validation->set_rules('nama_dosen', 'Nama_dosen', 'required');
        $this->form_validation->set_rules('nidn', 'Nidn', 'required');
        $this->form_validation->set_rules('jk', 'Jk', 'required');
        $this->form_validation->set_rules('foto_profil', 'Foto_profil');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/manajemendosen');
        } else {
            $this->A_dosen->tambahDataDosen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/manajemendosen');
        }
    }

    public function hapus($id_dosen)
    {

        $this->A_dosen->hapusDataDosen($id_dosen);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/manajemendosen');
    }
}
