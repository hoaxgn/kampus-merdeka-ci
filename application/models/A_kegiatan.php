<?php


class A_kegiatan extends CI_Model {
    public function getAllKegiatan()
    {
        return $this->db->get('tbl_kegiatan')->result_array(); 
    }
    public function tambahDataKegiatan() 
    { 
    $data = [
        "kegiatan" => $this->input->post('kegiatan', true),
        "pengertian" => $this->input->post('pengertian', true), 
        "tujuan" => $this->input->post('tujuan', true),
        "keg_mekanisme" => $this->input->post('keg_mekanisme', true),
        "keg_lembaga" => $this->input->post('keg_lembaga', true),
        "keg_mahasiswa" => $this->input->post('keg_mahasiswa', true),
        "keg_penilaian" => $this->input->post('keg_penilaian', true),
        "sks" => $this->input->post('sks', true)

    ];
 
    $this->db->insert('tbl_kegiatan', $data);

	}

   
}