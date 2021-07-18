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


} 