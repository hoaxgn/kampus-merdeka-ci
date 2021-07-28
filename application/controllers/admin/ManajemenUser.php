<?php


class ManajemenUser extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        $this->load->model('A_user');

        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['judul'] = 'Daftar User';
        $data['user'] = $this->A_user->getAllUser();
        if ($this->input->post('keyword')) {
            $data['user'] = $this->A_user->cariDataUser();
        }
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/manajemen_data/user', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'tambah User';
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/manajemenuser');
        } else {
            $this->A_user->tambahDataUser();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/manajemenuser');
        }
    }


    public function hapus($id_user)
    {

        $this->A_user->hapusDataUser($id_user);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/manajemenuser');
    }

    public function ubah($id_user)
    {
        $data['judul'] = 'Form Ubah User';
        $data['user'] = $this->A_user->getUserById_user($id_user);
        $data['role'] = ['1', '2', '3'];

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/manajemenuser');
        } else {
            $this->A_user->ubahDataUser();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/manajemenuser');
        }
    }
}
