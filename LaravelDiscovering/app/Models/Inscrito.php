<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
    use HasFactory;

    protected $table = "inscritos";

    public $timestamps = false;

    protected $fillable = ['nome','email','cidade','uf'];
    
}
