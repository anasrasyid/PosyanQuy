<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        $this->load->model('ibu_model', 'ibu');
        $this->load->model('anak_model', 'anak');
  	}
    
    public function index() {
        die('Ini controller ibu pada admin panel');
    }
    
    public function get($id) {
        json_encode($this->ibu->get($id));
    }
    
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => $this->input->post('namaIbu'),
                'alamat' => $this->input->post('alamatIbu'),
                'email' => $this->input->post('emailIbu'),
                'password' => $this->input->post('passwordIbu')
            ];
            if ($this->ibu->create($data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
        }
    }
    
    public function update($id) {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => $this->input->post('namaIbu'),
                'alamat' => $this->input->post('alamatIbu'),
                'email' => $this->input->post('emailIbu'),
                'password' => $this->input->post('passwordIbu')
            ];
            if ($this->ibu->update($id, $data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
        }
    }
    
    public function delete($id) {
        if ($this->ibu->delete($id)) {
            redirect('admin');
        } else {
            die('gagal anjing');
        }
    }
    
    public function search($keyword) {  
        return json_encode($this->ibu->search($keyword));
    }
    
    public function list_anak($id) {
       return json_encode($this->anak->get_by_ibu($id));
    }
    
}
