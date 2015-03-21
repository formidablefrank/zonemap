<?php

class Ratings extends CI_model{

    function __construct(){
        parent::__construct();
    }

    function addRating($point_id, $rate){
        $data = array(
            'point_id' => $point_id,
            'rate' => $rate
        );
        $this->db->insert('points', $data);
        return $this->db->insert_id();
    }

    function getRating($point_id){
        $this->db->select_avg('rate');
        $query = $this->db->get_where('ratings', array('point_id' => $point_id));
        return $query->result();
    }
}

?>