<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

	public function index(){

	$this->load->view('datatables');

	}
}