<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

    public function __construct() {
		parent::__construct(); // 부모 클래스(CI_Controller)의 생성자 호출
		$this->load->library('Common_use'); // 'libraries/'밑에 만들어진 클래스 로드
		$this->load->model('board_model');
	}
	
	 public function index(): void	{
		//$data는 CodeIgniter에서 뷰로 전달할 데이터를 담는 배열입니다.
		//$data['boards']는 $data 배열의 특정 키('boards')를 사용해 데이터를 저장합니다.
		$data['boards'] =  $this->board_model->select_board();
	
		$this->common_use->pc_template('main',$data);
	}

	public function detail_form(): void	{
		
		
		$this->common_use->pc_template('board/detail');
	}

	public function write_form(): void	{
		
	
		$this->common_use->pc_template('board/write');
	}
}
	

