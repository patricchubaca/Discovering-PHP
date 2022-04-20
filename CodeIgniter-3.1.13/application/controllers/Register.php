<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller(){

	public function index(){

		$usuarios = array(
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"cidade" => $this->input->post("cidade"),
			"uf" => $this->input->post("uf")

		);

		$this->db->insert("inscritos", $usuarios);

		$this->load->view('registerOk');
	}

	public function teste(){

		var_dump($this->input->post());
	}
}