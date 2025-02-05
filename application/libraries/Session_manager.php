<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Session_manager
{

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library("session");
    }

    public function set_userdata($userdata)
    {
        $this->CI->session->set_userdata($userdata);
    }

    public function set_single_userdata($key, $value)
    {
        $this->CI->session->set_userdata($key, $value);
    }

    public function get_userdata()
    {
        return $this->CI->session->userdata();
    }

    public function get_single_userdata($key)
    {
        return $this->CI->session->userdata($key);
    }



}

?>