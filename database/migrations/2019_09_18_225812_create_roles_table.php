<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nombre', 30)->unique();
            $table->string('descripcion', 100)->nullable();
            $table->boolean('condicion')->default(1);
        });
        DB::table('roles')->insert(array('nombre'=>'Administrador', 'descripcion'=>'Administrador general del sitio'));
        DB::table('roles')->insert(array('nombre'=>'Paciente', 'descripcion'=>'Paciente mediclic'));
        DB::table('roles')->insert(array('nombre'=>'Profesional de la salud', 'descripcion'=>'Profesional de cualquier área de salud'));
        DB::table('roles')->insert(array('nombre'=>'Asistente', 'descripcion'=>'Asistente del profesional de la salud'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
