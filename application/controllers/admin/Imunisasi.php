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
    
    public function get($id) {
        return json_encode($this->imunisasi->get($id));
    }
    
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => $this->input->post('namaVaksin'),
                'syarat_umur' => $this->input->post('syaratUmur'),
                'deskripsi' => $this->input->post('deskripsiVaksin'),
                'periode' => $this->input->post('periodeVaksin'),
                'id_kader' => $this->input->post('idKader')
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
                'nama' => $this->input->post('namaVaksin'),
                'syarat_umur' => $this->input->post('syaratUmur'),
                'deskripsi' => $this->input->post('deskripsiVaksin'),
                'periode' => $this->input->post('periodeVaksin')
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
