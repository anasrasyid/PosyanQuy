<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample_admin extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        $this->load->model('Sample_admin_model');
  	}
    
    '''
    fungsi untuk dashboard
    '''
    public function index() {
        $this->load->view('admin/sample_admin');
    }
    
    

    '''
    fungsi untuk imunisasi
    '''
    public function create_imunisasi() {
        
    }
    
    public function update_imunisasi($id) {
        
    }
    
    public function delete_imunisasi($id) {
        
    }
    
    public function search_imunisasi($keyword) {
        
    }
    
    '''
    fungsi untuk ibu
    '''
    public function create_ibu() {
        
    }
    
    public function update_ibu($id) {
        
    }
    
    public function delete_ibu($id) {
        
    }
    
    public function search_ibu($keyword) {  
        
    }
    
    public function get_list_anak($id) {
        
    }
    
    '''
    fungsi untuk anak
    '''
    public function create_anak() {
        
    }
    
    public function update_anak($id) {
        
    }
    
    public function delete_anak($id) {
        
    }
    
    public function search_anak($keyword) {  
        
    }
    
    public function get_history_vaksin($id) {
        
    }
    
    '''
    fungsi untuk antrian
    '''
    public function verifikasi_antrian($id) {
        
    }
    
    public function delete_antrian($id) {
        
    }
    
    public function search_antrian($keyword) {
        
    }
    
    
    
}
