<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SgiEsttipo;

class MateriaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $all = SgiEsttipo::all();

        foreach ($all as $key => $value) {

            $registro = [];

            $registro['id'] = $value['id'];
            $registro['sigla'] = $value['sigla'];
            $registro['tipo'] = $value['tipo'];
            $registro['formula'] = $value['formula'];
            $registro['codigo_sped'] = $value['codigo_sped'];
            $id = $value['id'];
       
            $registro['button'] = '<button class="button is-info is-light" onclick="visualisarUsuario('.$id.')">Editar</button>
                                   <button class="button is-danger is-light" onclick="deletarUsuario('.$id.')">Delete</button>';
            $data[] = $registro;
        }

        return ['data'=>$data];   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiais = SgiEsttipo::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = SgiEsttipo::find($id);

        return $material;  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $data = SgiEsttipo::find($id);
     $data->delete();

    return;
 }
}
