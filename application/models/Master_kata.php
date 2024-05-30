<?php

class Master_kata extends CI_Model
{
	function get_data()
	{
		$query = $this->db->get('master_kata');
		$res = $query->result();
		return $res;
	}
}
