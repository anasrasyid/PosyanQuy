<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak_model extends CI_Model {

	public function get($id_anak) {
      $this->db->where('id',$id_anak);
      return $this->db->get('anak')->row();
	}

    public function get_all() {
        return $this->db->get('anak')->result();
    }
    
    //ini parameternya id ibu ya
    public function get_by_ibu($id) {
        return $this->db->get_where('anak', ['id_ibu' => $id])->result();
    }
    
    public function create($data) {
        return $this->db->insert('anak', $data);
    }

    public function update($id_anak, $data) {
        $this->db->where('id', $id_anak);
        return $this->db->update('anak', $data);
    }
    
    public function delete($id_anak) {
        $this->db->where('id', $id_anak);
        return $this->db->delete('anak');
    }
    
    public function search() {
		
    }
}
