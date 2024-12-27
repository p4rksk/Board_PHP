<?php

class Board_model extends CI_Model{
    
    public function __construct() { 
        parent::__construct(); // 부모 클래스의 생성자 호출
}

    public function select_board() {

        $query = $this->db->query("SELECT id, title, author, write_date FROM board");

        $result = $query-> result_array();
        
        //일자까지만 나오게 날짜 포맷
        $result = array_map(function($row) {
            $row['write_date'] = date('Y-m-d', strtotime($row['write_date']));
            return $row;
        }, $result);
        

        unset($row); // 참조 해제

        return $result;
    }
}


?>