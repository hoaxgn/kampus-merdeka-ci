<?php


class A_info extends CI_Model {
    public function getAllInfo()
    {
        return $this->db->get('tbl_info')->result_array();
    }

    // public function tambahDataInfo()
    // { 
    // $data = [

    //     "id_admin" => $this->input->post('id_admin', true)
    //     "id_admin" => $this->input->post('id_admin', true)
    //     "id_admin" => $this->input->post('id_admin', true)
    //     "id_admin" => $this->input->post('id_admin', true)
    //     "id_admin" => $this->input->post('id_admin', true)
    //     "id_admin" => $this->input->post('id_admin', true)

    // ];

    // $this->db->insert('tbl_info', $data);

	// }

}