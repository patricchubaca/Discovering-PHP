<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DropRegister extends CI_Controller{

	public function deleteRegister($id){

		$this->db->where('id', $id);
		
		$this->db->delete('inscritos');

		$lista = $this->db->get("inscritos")->result_array();

		$dados = array("inscritos"=>$lista);
		
		$this->load->view('dashboard', $dados);

	}
}
