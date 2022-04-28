<?php

namespace app\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class RegisterController extends BaseController
{
	public function registerAction(){

		 return view('register');

	}

	public function JSONlistaDadosAction(){

	$lista = DB::table('inscritos')->get();

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


		return json_encode($usuarios);

	}
}