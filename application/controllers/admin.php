<?php

class Admin extends CI_Controller{
    
    function index(){
        $data = array();
        
        if($query = $this->event_model->get_records()){
            $data['records'] = $query;
        }
        
        $this->load->view('admin/all_events', $data);
        
    }
    
    function event(){
        if($query = $this->event_model->get_record()){
            $data['records'] = $query;
        }
        $this->load->view('admin/event', $data);
    }
    
    function delete(){
        $this->site_model->delete_row();
        $this->index();
    }
}

?>