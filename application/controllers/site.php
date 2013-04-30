<?php

class Site extends CI_Controller{
    function index(){
        $data = array();
        
        if($query = $this->site_model->get_records()){
            $data['records'] = $query;
        }
        
        $this->load->view('options_view', $data);
        
    }
    function create(){
        $data = array(
            'type' => $this->input->post('type'),
            'date' => $this->input->post('date'),
            'no_guests' => $this->input->post('no_guests'),
            'start_time' => $this->input->post('start_time'),
            'end_time' => $this->input->post('end_time'),
            'notes' => $this->input->post('notes')
        );
        
        $this->site_model->add_record($data);
        $this->index;
    }
    
    
    function update(){
        $data = array(
            'type' => 'New Breakfast',
            'no_guests' => '111'
        );
        
        $this->site_model->update_record($data);
    }
    
    function delete(){
        $this->site_model->delete_row();
        $this->index();
    }
}