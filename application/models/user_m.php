<?php
	class user_m extends CI_Model{
		function gets(){
			return $this->db->get('User')->result();
		}
		function get($id){}
		function add(){}
		function del($id){
			$this->db->delete('User', ["id"=>$id]);
			redirect(base_url().'Users');

		}
		function edit($d){}
	}