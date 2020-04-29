<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata('id_kader')) {
            return redirect('login');
        }
        $this->load->model('antrian_model', 'antrian');
  	}
    
    public function index() {
        die('Ini controller antrian pada admin panel');
    }
    
    public function get($id) {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->antrian->get($id)));
    }
    
    public function delete($id) {
        echo $this->antrian->delete($id);
    }
    
    public function search($keyword = '') {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->antrian->search($keyword)));
    }
}
