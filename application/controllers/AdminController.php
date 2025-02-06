<?php
defined("BASEPATH") or exit("No direct script access allowed");

class AdminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("AdminModel");
        $this->load->helper(["admin_helper", "form"]);
        $this->load->library("form_validation");
    }

    public function index()
    {
        check_super_admin_existence();

        $this->load->view("admin/login");
    }

    public function register_super_admin()
    {

        $adminModel = new AdminModel();
        if ($adminModel->is_super_admin_exists()) {
            redirect(BASE_URL("admin/login"));
        }
        $this->load->view("admin/register_super_admin");
    }
    public function register_super_admin_handler()
    {
        $this->form_validation->set_rules("first_name", "First name", "required|max_length[256]", array("required" => "*First name is required.", "max_length" => "*First name is too long."));

        $this->form_validation->set_rules("last_name", "Last name", "required|max_length[256]", array("required" => "*Last name is required.", "max_length" => "*Last name is too long."));

        $this->form_validation->set_rules("username", "Username", "required|max_length[16]|min_length[8]|is_unique[admintbl.username]", array("required" => "*Username name is required.", "max_length" => "*Maximum length of username is only 16 characters", "min_length" => "*Minimum length of username is at least 8 characters", "is_unique" => "*Username is already taken."));

        $this->form_validation->set_rules("password", "Password", "required|min_length[8]", array("required" => "*Password name is required.", "min_length" => "*Password must be at least 8 characters long"));
        $this->form_validation->set_rules("confirm_password", "Confirm password", "required|matches[password]", array("required" => "*Confirm your password.", "matches" => "*Password not matched."));

        if ($this->form_validation->run()) {

            $first_name = $this->input->post("first_name");
            $last_name = $this->input->post("last_name");
            $username = $this->input->post("username");
            $password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);

            $this->db->insert("admintbl", ["first_name" => $first_name, "last_name" => $last_name, "role" => "super-admin", "username" => $username, "password" => $password]);

            redirect(BASE_URL("admin/login"));


        } else {
            $this->load->view("admin/register_super_admin");
        }
    }
}


?>