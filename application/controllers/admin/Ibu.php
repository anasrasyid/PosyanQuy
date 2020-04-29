<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata('id_kader')) {
            return redirect('login');
        }
        $this->load->model('ibu_model', 'ibu');
        $this->load->model('anak_model', 'anak');
  	}
    
    public function index() {
        die('Ini controller ibu pada admin panel');
    }
    
    public function get($id) {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->ibu->get($id)));
    }
    
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => $this->input->post('namaIbu'),
                'alamat' => $this->input->post('alamatIbu'),
                'email' => $this->input->post('emailIbu'),
                'password' => $this->input->post('passwordIbu')
            ];
            echo $this->ibu->create($data);
        }
    }
    
    public function update() {
        if ($this->input->method() === 'post') {
            $id = $this->input->post('idIbu');
            $data = [
                'nama' => $this->input->post('namaIbu'),
                'alamat' => $this->input->post('alamatIbu')
            ];
            echo $this->ibu->update($id, $data);
        }
    }
    
    public function delete($id) {
        echo $this->ibu->delete($id);
    }
    
    public function search($keyword = '') {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->ibu->search($keyword)));
    }
    
    public function list_anak($id) {
       $this->output->set_content_type('application/json');
       $this->output->set_output(json_encode($this->anak->get_by_ibu($id)));
    }
    
}
