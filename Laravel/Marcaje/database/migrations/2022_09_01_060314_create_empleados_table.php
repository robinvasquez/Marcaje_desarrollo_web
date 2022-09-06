<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_empleado', function (Blueprint $table) {
            $table->bigIncrements('empleado_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('rol_id')->on('tc_rol');
            $table->string('puesto');
            $table->string('correo');
            $table->string('clave');
            $table->tinyinteger('estado')->default(1);
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tc_empleado');
    }
}
