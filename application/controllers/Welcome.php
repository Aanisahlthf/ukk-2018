<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('user_m');
	}

	function index(){

		if (!isset($_SESSION['username'])) {
			$this->load->view('');
		} else {
			redirect('');
		}
	}
	
	public function index()
	{
		$this->load->view('home');
	}
}
