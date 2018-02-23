<?php
/**
* 
*/
class reservation_m extends CI_Model
{
	
	function add($value)
	{
		# code...
		return $this->db->insert('Reservation', $value);
	}

	function gets()
	{
		return $this->db->get('Reservation');
	}

	function edit($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('Reservation');
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('Reservation');
	}

	function update($id, $value)
	{
		$this->db->where('id', $id);
		return $this->db->update('Reservation', $value);
	}

	function cari_maskapai($where)
	{
		$this->db->from('rute');
		$this->db->where($where);
		$this->db->join('transportation', 'transportation.id = rute.transportation_id');
		return $this->db->get();	
	}
}