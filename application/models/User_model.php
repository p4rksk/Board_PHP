<?php

class User_model extends CI_Model{
    
    public function __construct() { 
        parent::__construct(); // 부모 클래스의 생성자 호출
    
}

    public function join_user($data) {

        // DB에 접근 쿼리
        $sql = "INSERT INTO USER (username, password, email, created_at) VALUES(?, ?, ?, now())";

        
        $query = $this->db->query($sql, array($data['username'], $data['password'], $data['email']) ); //$data = 데이터를 주고받는 변수로 사용

        
        return $query;
    }

    public function is_username_exists($useranme) {

        // 일치하는 행이 있는지 확인
         $query = $this->db->get_where('user', ['username'=> $useranme] );  //SELECT * FROM users WHERE username = '입력된값';

         return $query -> num_rows() > 0;
    }
}


?>