<?php

class Point_game extends CI_Model
{
	function save_data($data)
	{
		$this->db->insert('point_game', $data);
        return "Save Data Success";
	}
}
