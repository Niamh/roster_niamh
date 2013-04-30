<?php

class Site_model extends CI_Model{
    
    function get_records(){
        $query = $this->db->get('events');
        return $query->result();
    }
    
    function add_record($data){
        $this->db->insert('events', $data);
        return;
    }
    
    function update_record($data){
        $this->db->where('event_id', 3);
        $this->db->update('events', $data);
    }
    
    function delete_row(){
        $this->db->where('event_id', $this->uri->segment(3));
        $this->db->delete('events');
    }
}