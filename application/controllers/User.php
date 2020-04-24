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
        $this->load->model('akun_model');
  	}

	public function index() {
        $this->load->view('landing/home');
        $this->load->view('landing/footer');
    }
    
    public function login() {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
            );
        $result = $this->akun_model->get($data);
        if($result == null){
            $this->load->view('landing/login');
        }else{
            if($result->type == 0){
                redirect("member");
            }
            if($result->type == 1){
                redirect("admin/Dashboard");
            }
        }
    }
    
    public function imunisasi() {
        $data['imunisasi'] = $this->Imunisasi_model->get_all();
        $this->load->view('landing/imunisasi/imunisasi', $data);
        $this->load->view('landing/footer');
    }
    
    public function article($id = 0) {
        if ($id == 0) {
            $this->load->view('landing/article/article');
        } else {
            $this->load->view('landing/article/article' . $id);
        }
        $this->load->view('landing/footer');
    }
}
