<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$lista = $this->db->get("inscritos")->result_array();

		$dados = array("inscritos"=>$lista);
		
		$this->load->view('dashboard', $dados);
	}
}