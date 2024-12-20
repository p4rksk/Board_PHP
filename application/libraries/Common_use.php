<?php
defined('BASEPATH') or exit('No direct script access allowed'); //CodeIgniter의 보완 관련 코드로 무조건 프레임워크를 통해서만 실행되도록 하는 코드다.

class Common_use {
    private $CI; //CodeIgniter 객체

    public function __construct() {
        $this->CI = &get_instance();
    }
    public function pc_template($url, $data = null) {
        $this->CI->load->view("layout/header"); //views 밑에 경로
        $this->CI->load->view($url, $data);
        $this->CI->load->view("layout/footer");
    }
}
?>
