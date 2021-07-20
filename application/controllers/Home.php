<?php


class Home extends CI_Controller
{
    public function __construct() 
        {
        parent::__construct();
        $this->load->model('M_Home');
            $this->load->helper('url');
        
    }
    public function index()
    {
        $data['berita'] = $this->M_Home->TampilBerita();
        if( $this->input->post('keyword') ) {
            $data['berita'] = $this->M_Home>cariDataberita();
        }
        $this->load->view('landing/header');
        $this->load->view('landing/home',$data);
        $this->load->view('landing/footer');
    }

    public function about()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/about');
        $this->load->view('landing/footer');
    }
    // Berita
    // public function berita()
    // {
    //     $data['berita'] = $this->M_Home->TampilBerita();
    //     if( $this->input->post('keyword') ) {
    //         $data['berita'] = $this->M_Home>cariDataberita();
    //     }
    //     $this->load->view('landing/header');
    //     $this->load->view('landing/home',$data);
    //     $this->load->view('landing/footer');
    // }
    public function detailberita($id_info)
    {
        $data['berita'] = $this->M_Home->getBeritaById($id_info);
        $this->load->view('landing/header');
        $this->load->view('landing/berita',$data);
        $this->load->view('landing/footer');
    }

    public function pengumuman()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/penawaran');
        $this->load->view('landing/footer');
    } 
    public function penawaran()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/pengumuman');
        $this->load->view('landing/footer');
    }
    // wirausaha
    public function program_kegiatanwirausaha()
    {
        $data['wirausaha'] = $this->M_Home->TampilWirausaha();
        if( $this->input->post('keyword') ) {
            $data['wirausaha'] = $this->M_Home>cariDataWirausaha();
        }
        $this->load->view('landing/header');
        $this->load->view('landing/program_kegiatanwirausaha',$data);
        $this->load->view('landing/footer');
    }


    
    public function program_magang()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/program_magang');
        $this->load->view('landing/footer');
    }

    public function program_kkn()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/program_kkn');
        $this->load->view('landing/footer');
    }
    public function program_mengajar()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/program_mengajar');
        $this->load->view('landing/footer');
    }
}
