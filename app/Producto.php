<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre_comercial', 'nombre_generico', 'indicaciones', 'contraindicaciones'];
}
