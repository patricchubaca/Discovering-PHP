<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Banck extends Model
{

    protected $table = "sgibancos";

    public $timestamps = false;

    protected $fillable = [

    'registro',
    'numero',
    'agencia',
    'conta_corrente',
    'nome','digito_ag',
    'digito_cc',
    'indentificacao',
    'convenio',
    'correntista',
    'cor_tipo',
    'cor_numero',
    'contrato_caucao',
    'cnab',
    'carteira',
    'cart_topo',
    'intrudocao1',
    'introdocao2',
    'inscritos3'              
    ];
}
