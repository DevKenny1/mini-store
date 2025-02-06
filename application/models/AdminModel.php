<?php
defined("BASEPATH") or exit("No direct script access allowed");

class AdminModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function is_super_admin_exists()
    {
        // check the database if a super admin account is existing in the database
        $this->db->where("role", "super-admin");
        $query = $this->db->get("admintbl");
        if ($query->num_rows()) {
            return true;
        } else {
            return false;
        }
    }

    public function get_admins()
    {
        $result = $this->db->get("admintbl");
        return $result->result_array();
    }
}

?>