<?php

class Dashboard_model extends CI_Model{
	public function buscarTodos()
	{
		return $this->db->get("inscritos")->result_array();
	}
}