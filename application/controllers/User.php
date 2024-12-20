<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
		parent::__construct(); // 부모 클래스(CI_Controller)의 생성자 호출
		$this->load->library('Common_use'); // 'libraries/'밑에 만들어진 클래스 로드
	}
	
    public function join_form(): void	{
		
	
		$this->common_use->pc_template('user/join');
	}

    public function login_form(): void	{
		
	
		$this->common_use->pc_template('user/login');
	}
	
}