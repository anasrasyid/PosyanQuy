<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak_model extends CI_Model {

	public function get($id_anak) {
		$this->db->where('id',$id_anak);
		return $this->db->get('anak')->row_array();
	}

    public function get_all_anak() {
		return $this->db->get('anak')->result_array();
	}
    
    //ini parameternya id ibu ya
    public function get_by_ibu($id) {
        
    }
    
    public function create_anak($data) {
		return $this->db->insert('anak',$data);
	}

    public function update_anak($id_anak,$data) {
		$this->db->where('id',$id_anak);
		return $this->db->update('anak',$data);
	}
    
    public function delete_anak($id_anak) {
		$this->db->where('id',$id_anak);
		return $this->db->delete('anak');
	}
    
    public function cari_anak() {
		
	}
}
