<?php

class Info extends CI_Controller {
    public function __construct() 
    
    {
        parent::__construct();
        $this->load->model('A_info');
      
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['info'] = $this->A_info->getAllInfo();
        if( $this->input->post('keyword') ) {
            $data['info'] = $this->A_info->cariDatainfo();
        }
        $this->load->view('admin/template/header',$data);
        $this->load->view('admin/template/sidebar',$data);
        $this->load->view('admin/manajemen_menu/info',$data);
        $this->load->view('admin/template/footer');
    }

}   