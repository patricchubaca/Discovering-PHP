<?php

namespace app\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

use App\Models\Inscrito;
use Illuminate\Http\Request;

class saveController extends BaseController
{
	public function saveAction(Request $request){

		$name = $request->nome;
		$email = $request->email;
		$cidade = $request->cidade;
		$uf = $request->uf;

		$inscrito = new Inscrito();

		$inscrito->nome = $name;
		$inscrito->email = $email;
		$inscrito->cidade = $cidade;
		$inscrito->uf = $uf; 

		$inscrito->save();	


		return view('dashboard');	
	}
}