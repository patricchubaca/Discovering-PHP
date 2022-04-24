<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

	public function index(){

		$lista = $this->db->get("inscritos")->result_array();

		//$dados = array("data"=>$lista);
		//echo "<pre>";
		//echo(json_encode($dados));	
		foreach ($lista as $listas) {
			$result[]= [
				$listas['id'],
				$listas['nome'],
				$listas['email'],
				$listas['cidade'],
				$listas['cidade']
			];

		}

		$usuarios = [
			'data' => $result
		];

		echo json_encode($usuarios);
	}

	public function mostraData(){

		$this->load->view('datatables');

	}
}