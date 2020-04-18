<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian_model extends CI_Model {

	public function get_antrian($id_antrian) {
		$this->db->where('id',$id_antrian);
		return $this->db->get('antrian')->row_array();
	}
    
    public function get_all_antrian() {
		return $this->db->get('antrian')->result_array();
	}
    
    
    public function create_antrian($data) {
		return $this->db->insert('antrian',$data);
	}
    
    public function update_antrian($id_antrian,$data) {
		$this->db->where('id',$id_antrian);
		return $this->db->update('antrian',$data);
	}
    
    public function delete($id_antrian) {
		$this->db->where('id',$id_antrian);
		return $this->db->delete('antrian');
	}
    
    public function search() {
		
	}
}
