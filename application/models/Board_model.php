<?php

class Board_model extends CI_Model{
    
    public function __construct() { 
        parent::__construct(); // 부모 클래스의 생성자 호출
}

    public function select_board() {

        $query = $this->db->query("SELECT b.id as boardId,  b.title, b.write_date, u.id as userId, u.username 
                FROM board b
                Inner join User u on u.id = b.userId
                order by b.write_date asc
                ");

        $result = $query-> result_array();
        
        //일자까지만 나오게 날짜 포맷
        $result = array_map(function($row) {
            $row['write_date'] = date('Y-m-d', strtotime($row['write_date']));
            return $row;
        }, $result);
        

        unset($row); // 참조 해제

        return $result;
    }


    public function write_board($data, $userId) {
        $data['userId'] = $userId;

        $this->db->insert('board',$data);
    }

   

    public function get_board($id) {
        $query = $this->db->query("
            SELECT b.id, b.title, b.content, u.username
            FROM board b
            INNER JOIN User u ON u.id = b.userId
            WHERE b.id = ?
        ", [$id]);
        return $query->row_array();
    }
    
}


?>