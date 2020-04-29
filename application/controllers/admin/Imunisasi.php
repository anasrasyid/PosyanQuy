<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imunisasi extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata('id_kader')) {
            return redirect('login');
        }
        $this->load->model('imunisasi_model', 'imunisasi');
  	}
    
    public function index() {
        die('Ini imunisasi anak pada admin panel');
    }
    
    public function get($id) {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->imunisasi->get($id)));
    }
    
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => $this->input->post('namaVaksin'),
                'syarat_umur' => $this->input->post('syaratUmur'),
                'deskripsi' => $this->input->post('deskripsiVaksin'),
                'periode' => $this->input->post('periodeVaksin'),
                'id_kader' => $this->session->id_kader
            ];
            echo $this->imunisasi->create($data);
        }
    }
    
    public function update() {
        if ($this->input->method() === 'post') {
            $id = $this->input->post('idVaksin');
            $data = [
                'nama' => $this->input->post('namaVaksin'),
                'syarat_umur' => $this->input->post('syaratUmur'),
                'deskripsi' => $this->input->post('deskripsiVaksin'),
                'periode' => $this->input->post('periodeVaksin')
            ];
            echo $this->imunisasi->update($id, $data);
        }
    }
    
    public function delete($id) {
        echo $this->imunisasi->delete($id);
    }
    
    public function search($keyword = '') {  
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->imunisasi->search($keyword)));
    }
}
