<?php
defined("BASEPATH") or exit("No direct script access allowed");

class EmployeeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
        $this->load->helper("admin_helper");
    }

    public function index()
    {
        check_super_admin_existence();
        $this->load->view("employee/login");

    }
}

?>