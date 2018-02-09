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
}