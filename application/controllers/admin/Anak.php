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
    
    public function create() {
        
    }
    
    public function update($id) {
        
    }
    
    public function delete($id) {
        
    }
    
    public function search($keyword) {  
        
    }
    
    public function history_vaksin($id) {
        
    }
}
