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

	public function detail_form($id): void	{
		
		$data['board'] = $this->board_model->get_board($id);

		 // 게시글이 없으면 404 페이지 표시
		 if (empty($data['board'])) {
            show_404();
        }

		$this->common_use->pc_template('board/detail', $data);
	}

	public function write_form(): void	{
		
	   if (!$this->session->userdata('logged_in')){
		redirect('user/login_form');
	   }
		

		$this->common_use->pc_template('board/write');
	}

	public function write(){
		
		//로그인 했는지 확인
		if (!$this->session->userdata('logged_in')){
			redirect('user/login_form');
		   }


		$userId = $this->session->userdata('user_id');

		//사용자가 입력한 정보
		$data = [
			'title' => $this ->input->post("title"),
			'content' => $this ->input->post('content'),
			
		];

		$this->board_model->write_board($data, $userId);
		
		redirect('board/index');

	}


}
	

