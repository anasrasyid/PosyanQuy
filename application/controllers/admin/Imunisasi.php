<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imunisasi extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        $this->load->model('imunisasi_model', 'imunisasi');
  	}
    
    public function index() {
        die('Ini imunisasi anak pada admin panel');
    }
    
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => ,
                'syarat_umur' => ,
                'deskripsi' => ,
                'periode' => ,
                'id_kader' => 
            ];
            if ($this->imunisasi->create($data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
        }
    }
    
    public function update($id) {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => ,
                'syarat_umur' => ,
                'deskripsi' => ,
                'periode' => 
            ];
            if ($this->imunisasi->update($id, $data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
        }
    }
    
    public function delete($id) {
        if ($this->imunisasi->delete($id)) {
            redirect('admin');
        } else {
            die('gagal anjing');
        }
    }
    
    public function search($keyword) {  
        return json_encode($this->imunisasi->search($keyword));
    }
}
