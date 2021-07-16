<?php


class A_dosen extends CI_Model {
    public function getAllDosen()
    {
        return $this->db->get('tbl_dosen')->result_array();
    }

    public function tambahDataDosen()
    { 
    $data = [
      
        "nama_dosen" => $this->input->post('nama_dosen', true),
        "nidn" => $this->input->post('nidn', true),
        "jk" => $this->input->post('jk', true),
        "foto_profil" => $this->input->post('foto_profil', true), 
        "email" => $this->input->post('email', true)
     

    ];

    $this->db->insert('tbl_dosen', $data);

	}

    public function hapusDataDosen($id_dosen)
    {
        // $this->db->where('id_user', $id_user);
        $this->db->delete('tbl_dosen', ['id_dosen' => $id_dosen]);
    }

    public function ubahDataDosen()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('username', true),
            "role" => $this->input->post('role', true)
        ];

        $this->db->where('id_dosen', $this->input->post('id_dosen'));
        $this->db->update('tbl_dosen', $data);
    }
}