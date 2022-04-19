<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$inscritos = $this->db->get('inscritos')->result();


		echo "<pre>";
		var_dump($inscritos);
		echo "</pre>";


		die();

		$teste = ['nome'=> 'Hellow Hord'];

		$this->load->view('dashboard',$inscritos);
	}
}