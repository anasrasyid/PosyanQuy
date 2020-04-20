<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
sudah diatur agar cara mengaksesnya http://localhost/posyanquy/{nama_method}
tanpa nama controller User
*/

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->view('landing/header');
        $this->load->model('Imunisasi_model');
  	}

	public function index() {
        $this->load->view('landing/home');
        $this->load->view('landing/footer');
    }
    
    public function login() {
        $this->load->view('landing/login');
    }
    
    public function imunisasi() {
        $data['imunisasi'] = $this->Imunisasi_model->get_all_ims();
        $this->load->view('landing/imunisasi/imunisasi',$data);
        $this->load->view('landing/footer');
    }
    
    public function article() {
        $this->load->view('landing/article/article');
        $this->load->view('landing/footer');
    }

    public function article1() {
        $this->load->view('landing/article/article1');
        $this->load->view('landing/footer');
    }

    public function article2() {
        $this->load->view('landing/article/article2');
        $this->load->view('landing/footer');
    }

    public function article3() {
        $this->load->view('landing/article/article3');
        $this->load->view('landing/footer');
    }
}
