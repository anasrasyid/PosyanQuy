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
    
    public function create() {
        
    }
    
    public function update($id) {
        
    }
    
    public function delete($id) {
        
    }
    
    public function search($keyword) {  
        
    }
    
    public function list_anak($id) {
        
    }
    
}
