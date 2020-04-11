<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sampleView extends CI_Controller {

    #SAMPLE MODEL BIAR GA ERROR
	public function __construct(){
        parent::__construct();
        $this->load->model('sampleModel');
  	}
    
    #SAMPLE VIEW BIAR GA ERROR
	public function index(){
        $this->load->view('admin/adminDashBoard');
    }
}
