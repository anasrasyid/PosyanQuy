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
    
    public function get($id) {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->antrian->get($id)));
    }
    
    /*
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'waktu' => $this->input->post(''),
                'id_ibu' => $this->input->post(''),
                'id_anak' => $this->input->post('')
            ];
            if ($this->antrian->create($data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
            
    }
    */
    
    public function delete($id) {
        if ($this->antrian->delete($id)) {
            redirect('admin');
        } else {
            die('gagal anjing');
        }
    }
    
    public function search($keyword) {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->antrian->search($keyword)));
    }
}
