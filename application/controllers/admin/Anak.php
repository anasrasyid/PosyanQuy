<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata('id_kader')) {
            return redirect('member');
        }
        $this->load->model('anak_model', 'anak');
        $this->load->model('history_model', 'history');
  	}
    
    public function index() {
        die('Ini controller anak pada admin panel');
    }
    
    public function get($id) {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->anak->get($id)));
    }
    
    public function create() {
        if ($this->input->method() === 'post') {
            $data = [
                'nama' => $this->input->post('namaAnak'),
                'tempat_lahir' => $this->input->post('ttl1'),
                'tanggal_lahir' => $this->input->post('ttl'),
                'berat_badan' => $this->input->post('bbAnak'),
                'id_ibu' => $this->input->post('idIbu')
            ];
            echo $this->anak->create($data);
        }
    }
    
    public function update() {
        if ($this->input->method() === 'post') {
            $id = $this->input->post('idAnak');
            $data = [
                'nama' => $this->input->post('namaAnak'),
                'tempat_lahir' => $this->input->post('ttl1'),
                'tanggal_lahir' => $this->input->post('ttl'),
                'berat_badan' => $this->input->post('bbAnak'),
                'id_ibu' => $this->input->post('idIbu')
            ];
            echo $this->anak->update($id, $data);
        }
    }
    
    public function delete($id) {
        echo $this->anak->delete($id);
    }

    public function deleteVaksin($id) {
        //nanti return hasil boolean deletenya aja saat implement sweetalert
        echo $this->history->delete($id);
    }
    
    public function search($keyword = '') {  
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->anak->search($keyword)));
    }
    
    public function history_vaksin($id) {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->history->get_by_anak($id)));
    }
    
    public function imunisasi() {
        if ($this->input->method() === 'post') {
          $data = [
              'tanggal' => $this->input->post('tanggalHistory'),
              'id_imunisasi' => $this->input->post('idVaksin'),
              'id_anak' => $this->input->post('idAnak')
          ];
          echo $this->history->create($data);
        }
    }
}
