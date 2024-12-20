<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

    public function __construct() {
		parent::__construct(); // 부모 클래스(CI_Controller)의 생성자 호출
		$this->load->library('Common_use'); // 'libraries/'밑에 만들어진 클래스 로드
	}
	
	 public function index(): void	{
		$this->common_use->pc_template('main');
	}

	public function detail(): void	{
		base_url('member/joinForm');
		https://www.kormia.co.kr/member/joinForm
		http://localhost/board/
		$this->load->view('hi');
	}

	public function write_form(): void	{
		
	
		$this->common_use->pc_template('board/write');
	}
}
	

