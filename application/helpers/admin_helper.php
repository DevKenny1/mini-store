<?php
defined("BASEPATH") or exit("No direct script access allowed.");

function check_super_admin_existence()
{

    $CI = &get_instance();
    $CI->load->model("AdminModel");

    $adminModel = new AdminModel();
    // redirect to the creation of super admin page if super admin account is not yet created in the database
    if (!$adminModel->is_super_admin_exists()) {
        redirect(BASE_URL("admin/register_super_admin"));
    }
}

?>