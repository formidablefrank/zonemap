<?php
class Incidents extends CI_model{
    function __construct(){
        parent::__construct();
    }

    function addIncident($point_id, $incident_no){
        $data = array(
            'point_id' => $point_id,
            'incident_no' => $incident_no
        );
        $this->db->insert('points_incidents', $data);
    }

    function getIncidents($point_id){
        $this->db->select_sum('freq');
        $this->db->select('incident_id');
        $this->db->group_by('incident_id');
        $query = $this->db->get_where('points_incidents', array('point_id' => $point_id));
        return $query->result();
    }
}
?>