<?php

class Cities_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        
        $this->load->database();
    }
    public function get_list(){
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->order_by('name','ASC');
        
        $query = $this->db->get();
        $result = $query->result(); 
        return $result;
    }
    
    public function update($id, $name, $postal_code){
        $record = [
            'name'  =>  $name,
            'postal_code'   =>  $postal_code
        ];
        $this->db->where('id',$id);
        return $this->db->update('cities',$record);
    }
    
    public function select_by_id($id){
        $this->db->select("*");
        $this->db->from('cities');
        $this->db->where('id',$id);
        
        return $this->db->get()
                        ->row();
    }
    
    public function insert($name, $postal_code){
        $record = [
            'name'  =>  $name,
            'postal_code'   =>  $postal_code
        ];
        return $this->db->insert('cities',$record);
        return $this->db->insert_id();
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        return $this->db->delete('cities');
    }
}
