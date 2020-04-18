<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu_model extends CI_Model {

	public function get_ibu($id_ibu) {
		$this->db->where('id',$id_ibu);
		return $this->db->get('ibu')->row_array();
	}
    
    public function get_all_ibu() {
		return $this->db->get('ibu')->result_array();
	}
    
    
    public function create($data) {
		return $this->db->insert('ibu',$data);
	}
    
    public function update($id_ibu, $data) {
		$this->db->where('id',$id_ibu);
		return $this->db->update('ibu',$data);
	}
    
    public function delete($id_ibu) {
		$this->db->where('id',$id_ibu);
		return $this->db->delete('ibu');
	}
    
    public function search($keyword) {
		
	}
}
