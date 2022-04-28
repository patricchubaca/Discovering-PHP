<?php

namespace app\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
	public function registerAction(){

		 return view('register');

	}

	public function JSONlistaDadosAction(){

		$users = DB::table('inscritos')->get();

		$dados = array("inscritos"=>$users);

		return json_encode($dados);

	}
}