<?php


class A_kegiatan extends CI_Model {
    public function getAllKegiatan()
    {
        return $this->db->get('tbl_kegiatan')->result_array(); 
    }

   
}