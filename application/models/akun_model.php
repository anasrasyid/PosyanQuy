<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akun_model extends CI_Model {

	public function get($data) {
		$this->db->where($data);
		return $this->db->get('akun')->row();
	}
}
