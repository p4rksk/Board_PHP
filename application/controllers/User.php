<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
		parent::__construct(); // 부모 클래스(CI_Controller)의 생성자 호출
		$this->load->library('Common_use'); // 'libraries/'밑에 만들어진 클래스 로드
		$this->load->model('user_model');
	}
	
    public function join_form(): void	{
		
	
		$this->common_use->pc_template('user/join');
	}

    public function login_form(): void	{
		
	
		$this->common_use->pc_template('user/login');
	}

	public function join(): void {
		//사용자 입력 데이터 가져오기
		$data = [
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT), // 비밀번호 암호화
			'email'    => $this->input->post('email')
		];
	 

		//회원가입 로직 호출
		$result =  $this->user_model->join_user($data);

		if ($result){
			$this->common_use->pc_template('user/login');
		} else {
			echo '회원가입에 실패하였습니다.';
			$this->common_use->pc_template('user/join');
		}
		
	}

	public function check_username() {
		$useranme = $this->input->post('username');

		//응답 데이터 초기화
		$response = ['status' => false, 'message' => ''];
		
		//입력이 빈값일 시
		if ($useranme == '') {
		$response['message'] = '아이디를 입력하세요';
		echo json_encode($response);
		}

		//중복체크
		$is_exists = $this->user_model->is_username_exists($useranme);

		if ($is_exists) {
			$response['message'] = '이미 사용중인 아이디입니다.';
		} else {
		$response['status'] = true;
		$response['message'] = '사용 가능한 아이디입니다.';
		}
		echo json_encode($response);
	
	}

	public function login() {

			//사용자 입력 데이터 가져오기
			$data = [
				'username' => $this->input->post('username'),
				'password'=> $this->input->post('password'),
			];

			$user = $this ->user_model->login_user($data);

			//일치하는 사용자가 있을시 세션에 저장
			if ($user) {
				$this->session->set_userdata([
					'user_id'   => $user['id'],
					'username'  => $user['username'],
					'logged_in' => true,
				]);

				return redirect("board/index");	
			} else {

				echo '로그인에 실패하였습니다.';
				return redirect("user/login_form");
			}
	}
}