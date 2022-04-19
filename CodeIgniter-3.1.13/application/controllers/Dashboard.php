<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
		//$inscritos = $this->db->get('inscritos')->result_array();

		//$dados =  array("inscritos" => $inscritos);

		//$this->load->model("dashboard_model");

		$lista = $this->db->get("inscritos")->result_array();

		$dados = array("inscritos"=>$lista);

		echo "<pre>";
		var_dump($dados);
		echo "</pre>";
		
		$this->load->view('dashboard', $dados);
	}
}