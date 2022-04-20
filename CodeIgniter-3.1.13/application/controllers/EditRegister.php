<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditRegister extends CI_Controller{

	public function editRegister($id){

	$dados = $this->db->get_where("inscritos", array(
			"id" => $id
		))->row_array();

	$this->load->view('editRegister',$dados);
	}
}