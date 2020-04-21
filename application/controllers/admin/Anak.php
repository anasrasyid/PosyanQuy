<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        $this->load->model('anak_model', 'anak');
  	}
    
    public function index() {
        die('Ini controller anak pada admin panel');
    }
    
    public function get($id) {
        return json_encode($this->anak->get($id));
    }
    
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => $this->input->post('namaAnak'),
                'tempat_lahir' => $this->input->post('ttl'),
                'tanggal_lahir' => $this->input->post('ttl'),
                'berat_badan' => $this->input->post('bbAnak'),
                'id_ibu' => $this->input->post('idIbu')
            ];
            if ($this->anak->create($data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
            
        }
    }
    
    public function update($id) {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => $this->input->post('namaAnak'),
                'tempat_lahir' => $this->input->post('ttl'),
                'tanggal_lahir' => $this->input->post('ttl'),
                'berat_badan' => $this->input->post('bbAnak'),
                'id_ibu' => $this->input->post('idIbu')
            ];
            if ($this->anak->update($id, $data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
        }
    }
    
    public function delete($id) {
        if ($this->anak->delete($id)) {
            redirect('admin');
        } else {
            die('gagal anjing');
        }
    }
    
    //hasilnya json
    public function search($keyword) {  
        return json_encode($this->anak->search($keyword));
    }
    
    public function history_vaksin($id) {
        return json_encode($this->anak->search($keyword));
    }
}
