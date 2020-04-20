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
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => ,
                'tempat_lahir' => ,
                'tanggal_lahir' => ,
                'berat_badan' => ,
                'id_ibu' => 
            ];
            if ($this->anak->create($data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
            
        }
    }
    
    public function update($id) {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => ,
                'tempat_lahir' => ,
                'tanggal_lahir' => ,
                'berat_badan' => ,
                'id_ibu' => 
            ];
            if ($this->anak->update($id, $data)) {
                redirect('admin');
            } else {
                die('gagal anjing');
            }
        }
    }
    
    public function delete($id) {
        if ($this->anak->delete($id)) {
            redirect('admin');
        } else {
            die('gagal anjing');
        }
    }
    
    //hasilnya json
    public function search($keyword) {  
        return json_encode($this->anak->search($keyword));
    }
    
    public function history_vaksin($id) {
        return json_encode($this->anak->search($keyword));
    }
}
