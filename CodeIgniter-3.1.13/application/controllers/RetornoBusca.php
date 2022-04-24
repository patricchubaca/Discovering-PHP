<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RetornoBusca extends CI_Controller{

	public function index(){

		$lista = $this->db->get("inscritos")->result_array();

		$dados = array("inscritos"=>$lista);

		echo json_encode($dados);
	}

	public function buscaNome($nome){

		$lista = $this->db->get("inscritos")->result_array();

		$dados = array("inscritos"=>$lista);

		echo json_encode($dados);

	}

	

}



