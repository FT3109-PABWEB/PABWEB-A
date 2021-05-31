<?php
class Auth_model extends CI_Model
{
    function cek_user($data)
    {
        return $this->db->get_where('users', $data);
    }
}