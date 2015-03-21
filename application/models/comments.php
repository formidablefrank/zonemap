<?php
class Comments extends CI_model{

    function __construct(){
        parent::__construct();
    }

    function getComments($point_id){
        $query = $this->db->get_where('comments', array('point_id' => $point_id));
        $table = array();
        foreach ($query->result() as $row) {
            $table[] = $row;
        }
        $query->free_result();
        return $table;
    }

    function addComment($point_id, $comment, $username){
        $data = array(
            'point_id' => $point_id,
            'comment' => $comment,
            'username' => $username
        );
        $this->db->insert('comments', $data);
    }
}
?>