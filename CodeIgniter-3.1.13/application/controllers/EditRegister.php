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

	public function register($id){

		$data  =  array ( 
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"cidade" => $this->input->post("cidade"),
			"uf" => $this->input->post("uf")

		);

		$this->db->set($data);
		$this->db->where('id', $id); 
		$this->db->update('inscritos', $data); 
		
		$lista = $this->db->get("inscritos")->result_array();

		$dados = array("inscritos"=>$lista);
		
		$this->load->view('dashboard', $dados);
	}
}