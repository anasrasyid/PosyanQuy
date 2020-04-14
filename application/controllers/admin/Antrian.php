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
    
    public function create($id) {
        
    }
    
    public function verifikasi($id) {
        
    }
    
    public function delete($id) {
        
    }
    
    public function search($keyword) {
        
    }
}
