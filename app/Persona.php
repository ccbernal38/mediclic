<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = ['tipo_documento','no_documento','primer_nombre','segundo_nombre','primer_apellido',
    'segundo_apellido','correo','sexo','terminos','fecha_nacimiento'];
}
