<?php
	class Users extends CI_Controller{
		
		function index(){
			$this->load->model('user_m');

			$data['tbuser'] = $this->user_m->gets();

			$this->load->view('user_data', $data);
		}
		function add(){}
		function del($id){
			$this->load->model('user_m');

			$this->user_m->del($id);
		}
		function edit($d){}
		function detail($id){}
	}