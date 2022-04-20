<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){

		$usuarios = array(
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"cidade" => $this->input->post("cidade"),
			"uf" => $this->input->post("uf")

		);

		$lista = $this->db->get("inscritos")->result_array();

		$dados = array("inscritos"=>$lista);

		$this->db->insert("inscritos", $usuarios);
		
		$this->load->view('dashboard', $dados);
	}

	public function pageRegister(){

		$this->load->view('register');
	}
}