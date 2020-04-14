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
        
    }
    
    public function update($id) {
        
    }
    
    public function delete($id) {
        
    }
    
    public function search($keyword) {  
        
    }
}
