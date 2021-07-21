<?php


class M_Home extends CI_Model {
    public function TampilWirausaha()
    {
        // $this->db->select();
        // $this->db->from('tbl_kegiatan');
        // $this->db->where('id_kegiatan','1');
        // $query = $this->db->get();
        // return $query->result();
        $this->db->where('id_kegiatan','1');
        return $this->db->get('tbl_kegiatan')->result_array();
    }
    public function TampilMagang()
    {
        $this->db->where('id_kegiatan','2');
        return $this->db->get('tbl_kegiatan')->result_array();
    }
    // public function TampilMagang()
    // {
    //      $this->db->where('id_kegiatan','2');
    //     return $this->db->get('tbl_kegiatan')->result_array();
    // }
    
    public function TampilBerita()
    {
        $this->db->where('jenis_info','1');
        return $this->db->get('tbl_info')->result_array();
    }
    public function getInfoById($id_info)
    {
        return $this->db->get_where('tbl_info', ['id_info' => $id_info])->row_array();
    }

    public function TampilPengumuman()
    {
        $this->db->where('jenis_info','2');
        return $this->db->get('tbl_info')->result_array();
    }
    

    public function TampilPenawaran()
    {
        $this->db->where('jenis_info','3');
        return $this->db->get('tbl_info')->result_array();
    }

} 