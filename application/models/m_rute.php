<?php
/**
* 
*/
class m_rute extends CI_Model
{
	
	function gets()
	{
		return $this->db->get('rute');
	}
	
}