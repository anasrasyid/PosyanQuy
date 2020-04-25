<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak_model extends CI_Model {
  
  public function __construct() {
      parent::__construct();
      $this->load->helper('admin');
  }

	public function get($id_anak) {
      $this->db->where('id',$id_anak);
      $res = $this->db->get('anak')->row();
      $res->nama_ibu = getNamaIbu($res->id_ibu);
      return $res;
	}

    public function get_all() {
        $res = $this->db->get('anak')->result();
        foreach ($res as $row) {
            $row->nama_ibu = getNamaIbu($row->id_ibu);
        }
        return $res;
    }
    
    //ini parameternya id ibu ya
    public function get_by_ibu($id) {
        $res = $this->db->get_where('anak', ['id_ibu' => $id])->result();
        foreach ($res as $row) {
            $row->nama_ibu = getNamaIbu($row->id_ibu);
        }
        return $res;
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
    
    public function search($keyword) {
        $this->db->or_like(['nama' => $keyword, 'tempat_lahir' => $keyword, 'tanggal_lahir' => $keyword, 'berat_badan' => $keyword, 'id_ibu' => $keyword]);
        $res = $this->db->get('anak')->result_array();
        foreach ($res as &$row) {
            $row['nama_ibu'] = getNamaIbu($row['id_ibu']);
        }
        return $res;
    }
}
