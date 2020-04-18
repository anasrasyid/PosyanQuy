<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imunisasi_model extends CI_Model {

	public function get_ims($id_ims) {
		$this->db->where('id',$id_ims);
		return $this->db->get('imunisasi')->row_array();
	}
    
    public function get_all_ims() {
		return $this->db->get('imunisasi')->result_array();
	}
    
    
    public function create_ims($data) {
		return $this->db->insert('imunisasi',$data);
	}
    
    public function update_ims($id_ims, $data) {
		$this->db->where('id',$id_ims);
		return $this->db->update('imunisasi',$data);
	}
    
    public function delete($id_ims) {
		$this->db->where('id',$id_ims);
		return $this->db->delete('imunisasi');
	}
    
    
    public function search() {
		
	}
}
