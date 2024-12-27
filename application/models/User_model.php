<?php

class Board_model extends CI_Model{
    
    public function __construct() { 
        parent::__construct(); // 부모 클래스의 생성자 호출
        $this -> load ->database();
}

    public function join_user() {
              
        
        // 중복체크가 있어야함.

        // DB에 접근 쿼리
        $sql = "INSERT INTO USER (username, password, email, created_at) VALUES(?, ?, ?, now())";

        
        $query = $this->db->query($sql, array($data['username'], $data['email'], $data['password']) ); //$data = 데이터를 주고받는 변수로 사용

        
        return $query;
    }

    public function is_username_exists($useranme) {

        // 일치하는 행이 있는지 확인
         $query = $this->db->get_where('users', ['username'=> $useranme] );  //SELECT * FROM users WHERE username = '입력된값';

         return $query -> num_rows() > 0;
    }
}


?>