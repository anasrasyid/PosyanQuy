<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Antrian_model');
  }

  public function index()
  {
    $this->load->view('user/header');
    $this->load->view('user/profile-ibu.html');
  }
  
  public function daftarAntrian()
  {
    $this->load->view('user/header');
    $this->load->view('user/form-antrian.html');
  }

  public function pendaftaranAntrian()
  {
    $this->load->view('user/header');
    $this->load->view('user/success-daftar.html');
  }

  public function get_antrian($date) 
  {
    $day = $this->Antrian_model->get_count_by_date($date);
    echo json_encode($day);
  }

}