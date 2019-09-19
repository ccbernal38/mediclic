<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('tipo_documento', 20);
            $table->string('no_documento', 20)->unique();
            $table->string('primer_nombre', 100);
            $table->string('segundo_nombre', 100);
            $table->string('primer_apellido', 100);
            $table->string('segundo_apellido', 100);
            $table->string('correo', 100);
            $table->string('sexo', 10);
            $table->boolean('terminos');
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
