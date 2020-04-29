<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
sudah diatur agar cara mengaksesnya http://localhost/posyanquy/{nama_method}
tanpa nama controller User
*/

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // load header
        $this->load->view('landing/header');
  	}

	public function index() {
        $this->load->view('landing/home');
        $this->load->view('landing/footer');
    }
    
    public function login() {
        
        // check if have session id_ibu
        if($this->session->has_userdata('id_ibu')){
            redirect("member");
        }

        // get item from login
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
            );
        
        // get akun from model by data from login
        $result = $this->akun_model->get($data);

        // checking
        // type = 0 => member, type = 1 => admin
        // create session id_ibu
        if($result == null){
            $this->load->view('landing/login');
        }else{
            if($result->type == 0){
                $this->session->set_userdata('id_ibu',$result->id);
                redirect("member/index");
            }
            if($result->type == 1){
                $this->session->set_userdata('id_kader',$result->id);
                redirect("admin/");
            }
        }
    }
    
    public function imunisasi() {
        // get all imunisasi
        $data['imunisasi'] = $this->Imunisasi_model->get_all();

        $this->load->view('landing/imunisasi/imunisasi', $data);
        $this->load->view('landing/footer');
    }
    
    public function article($id = 0) {
        // load articles
        if ($id == 0) {
            $this->load->view('landing/article/article');
        } else {
            $this->load->view('landing/article/article' . $id);
        }
        
        $this->load->view('landing/footer');
    }
}
