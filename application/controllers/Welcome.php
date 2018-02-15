<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('user_m');
	}

	function index(){

		if (!isset($_SESSION['username'])) {
			redirect('Login');
		} else {
			
			$this->load->view('beranda');
		}
	}
	
}
