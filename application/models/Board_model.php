<?php

class Board_model extends CI_Model{
    
    public function __construct() { 
        parent::__construct(); // 부모 클래스의 생성자 호출
        $this -> load ->database();
}

    public function select_board() {

        $query = $this->db->query("SELECT id, title, author, write_date FROM board");

        $result = $query-> result_array();
        
        //일자까지만 나오게 날짜 포맷
        foreach ($result as $row){
         $row['write_date'] = date('Y-m-d', strtotime($row['write_date']));

        }

        return $result;
    }


}


?>