<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SgiEsttipo extends Model
{
    
    protected $table = "sgiesttipo";

    public $timestamps = false;

    protected $fillable = [

        'registro',
        'siglas',
        'tipo',
        'formula',
        'codigo_sped'    
    ];
}
