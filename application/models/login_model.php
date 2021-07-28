<?php
class Login_model extends CI_Model
{

    function validate($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $result = $this->db->get('tbl_user',);
        // $user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
        $query = $this->db->get_where('tbl_user', array('username' => $username, 'password' => $password));
        return $query->row_array();
        // return $user;
    }
}
