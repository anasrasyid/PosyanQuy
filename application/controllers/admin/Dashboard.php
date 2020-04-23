<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        $this->load->model('ibu_model', 'ibu');
        $this->load->model('anak_model', 'anak');
        $this->load->model('antrian_model', 'antrian');
        $this->load->model('imunisasi_model', 'imunisasi');
  	}
    
    public function index() {
        $data = [
            'ibu' => $this->ibu->get_all(),
            'anak' => $this->anak->get_all(),
            'antrian' => $this->antrian->get_all(),
            'imunisasi' => $this->imunisasi->get_all()
        ];
        
        $this->load->view('admin/sample_admin', $data);
        // $this->load->view('admin/sample_admin');
    }
}
