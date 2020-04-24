<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {
    public function get($id) {
        $this->db->where('id',$id);
		return $this->db->get('history')->row();
    }
      
    public function get_all() {
        return $this->db->get('history')->result();
    }
      
    //ini id anak ya parameternya
    public function get_by_anak($id) {
        return $this->db->get_where('history', ['id_anak' => $id])->result();
    }
      
      
    public function create($data) {
        return $this->db->insert('history', $data);
    }
      
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('history', $data);
    }
      
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('history');
    }
      
    public function search($keyword) {
        $this->db->or_like(['tanggal' => $keyword]);
        return $this->db->get('history')->result_array();
    }
}
