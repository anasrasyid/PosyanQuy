<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian_model extends CI_Model {

	public function get($id_antrian) {
		$this->db->where('id',$id_antrian);
		return $this->db->get('antrian')->row();
	}
    
    public function get_all() {
		return $this->db->get('antrian')->result();
	}
    
    public function get_count_by_date($date) {
        $this->db->where('waktu', $date);
        $this->db->from('antrian');
        return $this->db->count_all_results();
    }

    public function create($data) {
		return $this->db->insert('antrian',$data);
	}
    
    public function update($id_antrian,$data) {
		$this->db->where('id',$id_antrian);
		return $this->db->update('antrian',$data);
	}
    
    public function delete($id_antrian) {
		$this->db->where('id',$id_antrian);
		return $this->db->delete('antrian');
	}
    
    public function search($keyword) {
        $this->db->or_like(['waktu' => $keyword]);
        return $this->db->get('antrian')->result_array();
	}
}
