<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RetornoBusca extends CI_Controller{

	public function selecionaTodos(){
		
		$lista = $this->db->get("inscritos")->result_array();

		$dados = array("inscritos"=>$lista);
		
		$this->load->view('dashboard', $dados);
	}

}



