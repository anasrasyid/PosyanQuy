<?php
defined('BASEPATH') OR exit('No direct script access allowed');

'''
sudah diatur agar cara mengaksesnya http://localhost/posyanquy/{nama_method}
tanpa nama controller User
'''
class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
  	}

	public function index() {
        $this->load->view('landing/home.html');
    }
    
    public function login() {
        $this->load->view('landing/login.html');
    }
    
    public function imunisasi() {
        $this->load->view('landing/imunisasi/imunisasi.html');
    }
    
    public function article() {
        $this->load->view('landing/article/article.html');
    }
}
