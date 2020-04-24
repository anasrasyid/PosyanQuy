<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imunisasi_model extends CI_Model {

	public function get($id_ims) {
		$this->db->where('id',$id_ims);
		return $this->db->get('imunisasi')->row();
	}
    
    public function get_all() {
		return $this->db->get('imunisasi')->result();
	}
    
    
    public function create($data) {
		return $this->db->insert('imunisasi',$data);
	}
    
    public function update($id_ims, $data) {
		$this->db->where('id',$id_ims);
		return $this->db->update('imunisasi',$data);
	}
    
    public function delete($id_ims) {
		$this->db->where('id',$id_ims);
		return $this->db->delete('imunisasi');
	}
    
    
    public function search($keyword) {
        $this->db->or_like(['nama' => $keyword]);
        return $this->db->get('imunisasi')->result_array();
	}
}
