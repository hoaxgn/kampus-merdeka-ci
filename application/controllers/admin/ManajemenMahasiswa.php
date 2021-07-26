<?php

class ManajemenMahasiswa extends CI_Controller {
    public function __construct() 
    
    {
        parent::__construct();
        $this->load->model('A_mahasiswa');
      
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa'; 
        $data['mahasiswa'] = $this->A_mahasiswa->getAllMahasiswa();
        if( $this->input->post('keyword') ) {
            $data['mahasiswa'] = $this->A_mahasiswa->cariDataMahasiswa();
        }
        $this->load->view('admin/template/header',$data);
        $this->load->view('admin/template/sidebar',$data);
        $this->load->view('admin/manajemen_data/mahasiswa',$data);
        $this->load->view('admin/template/footer');
 
    }

}   