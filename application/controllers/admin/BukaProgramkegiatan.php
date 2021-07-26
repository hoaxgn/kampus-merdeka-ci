<?php

class BukaProgramkegiatan extends CI_Controller {
    public function __construct() 
    
    {
        parent::__construct();
        $this->load->model('A_kegiatan');
      
        $this->load->library('form_validation');
    } 
    public function index()
    {
        {
            $data['judul'] = 'Daftar Kegiatan'; 
            $data['kegiatan'] = $this->A_kegiatan->getAllKegiatan();
            if( $this->input->post('keyword') ) {
                $data['kegiatan'] = $this->A_kegiatan->cariDataKegiatan();
            }
        $this->load->view('admin/template/header',$data);
        $this->load->view('admin/template/sidebar',$data);
        $this->load->view('admin/manajemen_menu/bukaprogramkegiatan',$data);
        $this->load->view('admin/template/footer');
    }
    }
}   