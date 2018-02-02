<?php
defined('BASEPATH') or exit('no direct script access');

/**
* 
*/
class Login extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('user_m');
	}

	public function index()
	{
		# code...

		$this->load->view('Login');
	}

	public function action(){	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$procdata = array(
			'username' => $username,
			'password' => $password
			);

		$dolog = $this->user_m->cek_login('user', $procdata)->num_rows();

		if ($dolog > 0) {
			# code...
			$data_session = array(
				'username' => $username,
				'status' => 'login'
				);
			$this->session->set_userdata($data_session);
			redirect('welcome');
		}else{
			echo "Username dan password salah";
		}

	}
}
?>