<?php

class ManajemenTim extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/manajemen_data/Tim');
        $this->load->view('admin/template/footer');
 
    }

}   