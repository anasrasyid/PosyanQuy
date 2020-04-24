<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Antrian_model');
    $this->load->model('Ibu_model');
    $this->load->model('Anak_model');
  }

  public function index()
  {
    $id = 1;
    $data['ibu'] = $this->Ibu_model->get($id);
    $data['anak'] = $this->Anak_model->get_by_ibu($id);
    $data['umur'] = date_diff(date_create("today"),
      date_create($data['ibu']->tanggal_lahir))->format("%y Tahun");
    $this->load->view('user/header');
    $this->load->view('user/profile-ibu',$data);
  }
  
  public function daftarAntrian()
  {
    $id = 1;
    $data['anak'] = $this->Anak_model->get_by_ibu($id);
    $this->load->view('user/header');
    $this->load->view('user/form-antrian',$data);
  }

  public function pendaftaranAntrian()
  {
    $id = 1;
    $id_anak = $this->input->post("anak");
    $data['tanggal'] = $this->input->post('tanggal');

    if($id_anak && $data['tanggal']){
      $data['nama_anak'] = $this->Anak_model->get($id_anak)->nama;
      $data['tanggal'] = $this->input->post('tanggal');
      $data['nomor'] = $this->Antrian_model->get_count_by_date($data['tanggal']);
      $data['nama_ibu'] = $this->Ibu_model->get($id)->nama;
      $this->load->view('user/header');
      $this->load->view('user/success-daftar',$data);
    }else{
      // gagal mengantri
      redirect('member/daftarAntrian');
    }
    
  }

  public function get_antrian($date) 
  {
    // JSON API
    $day = $this->Antrian_model->get_count_by_date($date);
    echo json_encode($day);
  }

  public function logout(){
    redirect('');
  }

}