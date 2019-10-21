<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['codigo','nombre','nombre_comercial','ubicacion','principio_activo',
        'concentracion','forma_farmaceutica','registro_sanitario','laboratorio_id','imagen'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function laboratorio()
    {
        return $this->belongsTo('App\Laboratorio', 'laboratorio_id');
    }

}
