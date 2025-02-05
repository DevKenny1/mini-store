<?php
defined("BASEPATH") or exit("No direct script access allowed");

class AdminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {

        $adminModel = new AdminModel();
        echo $adminModel->is_super_admin_exists();
    }
}

?>