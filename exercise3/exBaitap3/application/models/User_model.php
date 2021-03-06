<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getListUser()
    {
        $Query = $this->db->get('user');
        return $Query->result_array();
    }

    public function insertUser($User)
    {
        return $this->db->insert('user', $User);
    }

    public function deleteUser($First, $Last)
    {
        $this->db->where('FirstName', $First);
        $this->db->where('LastName', $Last);
        return $this->db->delete('user');
    }

    public function updateUser($First,$Last,$User)
    {
        $this->db->where('FirstName', $First);
        $this->db->where('LastName',$Last);
        return $this->db->update('user', $User);
    }
}
?>