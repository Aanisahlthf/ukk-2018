<?php
	class user_m extends CI_Model{
		function gets(){
			return $this->db->get('User')->result();
		}
		function cek_login($table, $where){
			return $this->db->get_where($table, $where);
		}

		function update($table, $where, $id){
			$this->db->where('id', $id);
			return $this->db->update($table, $where);
		}

		function get_user_by_id($id){
			$this->db->where('id', $id);
			return $this->db->get('user');
		}

		function add(){}
		function del($id){
			$this->db->delete('User', ["id"=>$id]);
			redirect(base_url().'Users');

		}
		function edit($d){}
	}