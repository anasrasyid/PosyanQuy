<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata('id_kader')) {
            return redirect('login');
        }
    }
    
    public function index() {
        $this->load->view('admin/admin');
    }
    
    //Loginnya dari controller user, lol
    
    public function logout() {
        $this->session->unset_userdata('id_kader');
        return redirect('member');
    }
}
