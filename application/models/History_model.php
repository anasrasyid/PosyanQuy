<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->helper('admin');
    }
    
    public function get($id) {
        $this->db->where('id',$id);
        $res =  $this->db->get('history')->row();
        $res->nama_vaksin = getNamaVaksin($res->id_imunisasi);
        return $res;
    }
      
    public function get_all() {
        $res =  $this->db->get('history')->result();
        foreach ($res as $row) {
            $row->nama_vaksin = getNamaVaksin($row->id_imunisasi);
        }
        return $res;
    }
      
    public function get_by_anak($id) {
        $res = $this->db->get_where('history', ['id_anak' => $id])->result();
        foreach ($res as $row) {
            $row->nama_vaksin = getNamaVaksin($row->id_imunisasi);
        }
        return $res;
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
        $res =  $this->db->get('history')->result_array();
        foreach ($res as &$row) {
            $row['nama_vaksin'] = getNamaVaksin($row['id_imunisasi']);
        }
        return $res;
    }
}
