<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditRegister extends CI_Controller{

	public function editRegister($id){

		$lista = $this->db->get_where("inscritos", array(
			"id" => $id
		))->row_array();

		$dados = array("inscritos"=>$lista);
		
		$this->load->view('editRegister',$dados);						
	}
}