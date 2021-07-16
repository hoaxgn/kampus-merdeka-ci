<?php


class A_user extends CI_Model {
    public function getAllUser()
    {
        return $this->db->get('tbl_user')->result_array();
    }

    public function tambahDataUser()
    { 
    $data = [
        "username" => $this->input->post('username', true),
        "password" => $this->input->post('password', true), 
        "role" => $this->input->post('role', true)

    ];

    $this->db->insert('tbl_user', $data);

	}

    public function hapusDataUser($id_user)
    {
        // $this->db->where('id_user', $id_user);
        $this->db->delete('tbl_user', ['id_user' => $id_user]);
    }

    public function ubahDataUser()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('username', true),
            "role" => $this->input->post('role', true)
        ];

        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tbl_user', $data);
    }
}