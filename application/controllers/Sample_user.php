<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample_user extends CI_Controller {

    #SAMPLE MODEL BIAR GA ERROR
	public function __construct() {
        parent::__construct();
        // $this->load->model('sample_user');
  	}
    
    #SAMPLE VIEW BIAR GA ERROR
	public function index() {
        die('apa ajg');
    }
}
