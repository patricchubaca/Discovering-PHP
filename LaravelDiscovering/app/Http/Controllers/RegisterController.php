<?php

namespace app\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Inscrito;

class RegisterController extends BaseController
{
	public function registerAction(){

		 return view('register');

	}

	public function JSONlistaDadosAction(){

		return ['data'=> Inscrito::all()];

	}
}