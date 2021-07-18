<?php

class ManajemenKegiatan extends CI_Controller {
    
    public function __construct() 
    
    {
        parent::__construct();
        $this->load->model('A_kegiatan');
      
        $this->load->library('form_validation');
    } 
    public function index()
    {
        $data['judul'] = 'Daftar Kegiatan'; 
        $data['kegiatan'] = $this->A_kegiatan->getAllKegiatan();
        if( $this->input->post('keyword') ) {
            $data['kegiatan'] = $this->A_kegiatan->cariDataKegiatan();
        }
        $this->load->view('admin/template/header',$data);  
        $this->load->view('admin/template/sidebar',$data);
        $this->load->view('admin/manajemen_menu/programkegiatan',$data);
        $this->load->view('admin/template/footer');
    
    }
    public function tambah(){
        $data['judul'] = 'tambah kegiatan';

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('pengertian', 'Pengertian', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('keg_mekanisme', 'Keg_mekanisme', 'required');
        $this->form_validation->set_rules('keg_lembaga', 'Keg_lembaga', 'required');
        $this->form_validation->set_rules('keg_mahasiswa', 'Keg_mahasiswa', 'required');
        $this->form_validation->set_rules('keg_penilaian', 'Keg_penilaian', 'required');
        $this->form_validation->set_rules('sks', 'Sks', 'required');
        

        if ($this->form_validation->run() == false) {
            redirect('admin/manajemenkegiatan');
 
    } else {
        $this->A_kegiatan->tambahDataKegiatan();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/manajemenkegiatan');
    }
}
}   