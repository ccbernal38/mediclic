<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $fillable = ['nombre', 'nit', 'direccion', 'telefono', 'logo', 'contacto'];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
