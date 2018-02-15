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
}