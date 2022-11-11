<?php
class Base_model extends CI_Model{

    protected $table = null;

    public function __construct(){
        parent::__construct();
        //$this->db->db_debug = false;
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        return $this->db->update($this->table,$data);
    }

    public function find_all(){
        return $this->db->get($this->table)->result_array();
    }

    public function find_by_id($id){
        return $this->db->get_where($this->table,['id' => $id])->row_array();
    }

    public function delete($id){
        $this->db->db_debug = false;
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }

    public function get_total(){
        return $this->db->count_all($this->table);
    }
}