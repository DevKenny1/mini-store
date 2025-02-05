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
        $this->db->where("role", "super-admin");
        $query = $this->db->get("admintbl");
        if ($query->num_rows()) {
            return true;
        } else {
            return false;
        }
    }
}

?>