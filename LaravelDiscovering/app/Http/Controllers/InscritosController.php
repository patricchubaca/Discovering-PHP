<?php

namespace app\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Inscrito;

class InscritosController extends BaseController
{

	public function JSONlistaDadosAction(){

		return ['data'=> Inscrito::all()];

	}
}