<?php

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('npm', 'Npm', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Kampus Merdeka Login';
            $this->load->view('auth/header');
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_mhs', ['email' => $email])->row_array();
        var_dump('$user');
        die;
    }
    public function registration()
    {
        // $username = $this->input->post('nama_mhs');
        // $password = $this->input->post('password');
        // $email = $this->input->post('email');
        // $npm = $this->input->post('npm');
        // $user = $this->db->get_where('tbl_mhs', ['email' => $email])->row_array();
        $this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required|trim');
        $this->form_validation->set_rules('npm', 'NPM', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_mhs.email]', [
            'is_unique' => 'Email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password1]', [
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]');
        // $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/registration');
            $this->load->view('auth/footer');
        } else {
            $data = [
                'id_role' => 2,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'npm' => htmlspecialchars($this->input->post('npm', true)),
                'nama_mhs' => htmlspecialchars($this->input->post('nama_mhs', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
            ];

            $this->db->insert('tbl_mhs', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Congratulation your account has been created. Please Login!
			</div>');
            redirect('auth');
        }
    }

    // {
    //     $this->load->view('auth/registration');
    //     $this->load->view('auth/footer');
    // }
}
