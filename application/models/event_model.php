<?php

class Event_model extends CI_Model{
    
    function get_records(){
        $query = $this->db->get('events');

        return $query->result();
    }
    
    function get_record($data){
        $this->db->where('event_id', $this->uri->segment(3));
        $query = $this->db->get('events', $data);
        return $query->result();
    }
}
?>