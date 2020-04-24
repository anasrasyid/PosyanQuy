<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();

    if(!$this->session->has_userdata('id_ibu')){
      // back to landing page
      redirect('');
    }
  }

  public function index()
  {
    $id = $this->session->id_ibu;

    $data['ibu'] = $this->Ibu_model->get($id);
    $data['anak'] = $this->Anak_model->get_by_ibu($id);
    $data['umur'] = date_diff(date_create("today"),
      date_create($data['ibu']->tanggal_lahir))->format("%y Tahun");
    
    $this->load->view('user/header');
    $this->load->view('user/profile-ibu',$data);
  }
  
  public function daftarAntrian()
  {
    // get anak
    $id = $this->session->id_ibu;
    $data['anak'] = $this->Anak_model->get_by_ibu($id);

    $this->load->view('user/header');
    $this->load->view('user/form-antrian',$data);
  }

  public function pendaftaranAntrian()
  {
    $id = $this->session->id_ibu;

    // get item from form antrian
    $id_anak = $this->input->post("anak");
    $data['tanggal'] = $this->input->post('tanggal');

    if($id_anak && $data['tanggal']){
      
      // insert antrian to db
      $antri = array(
        'waktu'  => $data['tanggal'],
        'id_ibu'     => $id
      );
      $this->Antrian_model->create($antri);

      // get nama_anak, nomor, and nama_ibu
      $data['nama_anak'] = $this->Anak_model->get($id_anak)->nama;
      $data['nomor'] = $this->Antrian_model->get_count_by_date($data['tanggal']);
      $data['nama_ibu'] = $this->Ibu_model->get($id)->nama;
      
      $this->load->view('user/header');
      $this->load->view('user/success-daftar',$data);
      
    }else{
      // gagal mengantri
      redirect('member/daftarAntrian');
    }
  }

  public function logout(){
    // destroy session and back to landing page
    $this->session->sess_destroy();
    redirect('');
  }

  public function get_antrian($date) 
  {
    // JSON API
    $day = $this->Antrian_model->get_count_by_date($date);
    echo json_encode($day);
  }

  public function get_imunisasi_history($id) 
  {
    // JSON API
    $history = $this->History_model->get_by_anak($id);
    echo json_encode($history);
  }

  public function get_imunisasi($id) 
  {
    // JSON API
    $imun = $this->Imunisasi_model->get_name($id);
    echo json_encode($imun);
  }
}