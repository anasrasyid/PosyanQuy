<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imunisasi extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        $this->load->model('antrian_model', 'antrian');
  	}
    
    public function index() {
        die('Ini controller antrian pada admin panel');
    }
    
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'waktu' => ,
                'id_ibu' => 
            ];
            if ($this->antrian->create($data)) {
                redirect('admin');
            } else {
                die('gagal anjinh');
            }
            
    }
    
    public function verifikasi($id) {
        
    }
    
    public function delete($id) {
        if ($this->antrian->delete($id)) {
            redirect('admin');
        } else {
            die('gagal anjing');
        }
    }
    
    public function search($keyword) {
        return json_encode($this->antrian->search($keyword));
    }
}
