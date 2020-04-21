<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->view('user/header');
  }

  public function index()
  {
    $this->load->view('user/profile-ibu.html');
  }
  
  public function daftarAntrian()
  {
    $this->load->view('user/form-antrian.html');
  }

  public function pendaftaranAntrina()
  {
    $this->load->view('user/success-daftar.html');
  }

}