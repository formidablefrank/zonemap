<?php

class Points extends CI_model{

    function __construct(){
        parent::__construct();
    }

    function getAllPoints(){
        $query = $this->db->get('points');
        $table = array();
        foreach ($query->result() as $row) {
            $table[] = $row;
        }
        $query->free_result();
        return $table;
    }

    function getPoint($point_id){
        $query = $this->db->get_where('points', array('point_id' => $point_id));
        $table = array();
        foreach ($query->result() as $row) {
            $table[] = $row;
        }
        $query->free_result();
        return $table;
    }

    function addPoint($lat, $lng, $address){
        $data = array(
            'lat' => $lat,
            'lng' => $lng ,
            'address' => $address
        );
        $this->db->insert('points', $data);
        return $this->db->insert_id();
    }
}

?>