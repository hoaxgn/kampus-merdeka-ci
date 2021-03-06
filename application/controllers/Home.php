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
        $data['pengumuman'] = $this->M_Home->TampilPengumuman();
        if( $this->input->post('keyword') ) {
            $data['pengumuman'] = $this->M_Home>cariDataPengumuman();
        }
        $data['penawaran'] = $this->M_Home->TampilPenawaran();
        if( $this->input->post('keyword') ) {
            $data['penawaran'] = $this->M_Home>cariDataPenawaran();
        }
        $this->load->view('landing/header');
        $this->load->view('landing/home',$data);
        $this->load->view('landing/footer');
    }


    public function detailberita($id_info)
    {
        $data['berita'] = $this->M_Home->getInfoById($id_info);
        $this->load->view('landing/header');
        $this->load->view('landing/berita',$data);
        $this->load->view('landing/footer');
    }

    public function detailpengumuman($id_info)
    {
        $data['pengumuman'] = $this->M_Home->getInfoById($id_info);
        $this->load->view('landing/header');
        $this->load->view('landing/pengumuman',$data);
        $this->load->view('landing/footer');
    } 
    public function detailpenawaran($id_info)
    {
        $data['penawaran'] = $this->M_Home->getInfoById($id_info);
        $this->load->view('landing/header');
        $this->load->view('landing/penawaran',$data);
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
        $data['magang'] = $this->M_Home->TampilMagang();
        if( $this->input->post('keyword') ) {
            $data['magang'] = $this->M_Home>cariDataMagang();
        }
        $this->load->view('landing/header');
        $this->load->view('landing/program_magang',$data);
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
    public function about()
    {
        $data['tentang'] = $this->M_Home->TampilTentang();

        $this->load->view('landing/header');
        $this->load->view('landing/about',$data);
        $this->load->view('landing/footer');
    }
 
}
