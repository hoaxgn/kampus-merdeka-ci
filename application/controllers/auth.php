<?php

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
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
        $username    = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $user = $this->db->get_where('tbl_user', ['username' => $username], ['password' => $password]);

        if ($user != null) {
            $data  = $user->row_array();
            $username  = $data['username'];
            $role_id = $data['role'];
            $sesdata = array(
                'username'  => $username,
                'role'     => $role_id
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if ($role_id === '1') {
                redirect('Mahasiswa');
                // redirect('Mahasiswa');

                // access login for staff
            } elseif ($role_id === '2') {
                redirect('dosen');
                // access login for author
            } elseif ($role_id === '3') {
                redirect('admin/Admin');
            }
        } else {
            echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
            redirect('auth');
        }
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
                'id_role' => 1,
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

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('auth/header');
        $this->load->view('auth/login');
        $this->load->view('auth/footer');
    }
    // {
    //     $this->load->view('auth/registration');
    //     $this->load->view('auth/footer');
    // }
}
