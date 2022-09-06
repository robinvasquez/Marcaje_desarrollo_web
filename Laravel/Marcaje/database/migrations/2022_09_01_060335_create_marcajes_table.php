<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_marcaje', function (Blueprint $table) {
            $table->increments('marcaje_id');
            $table->unsignedBigInteger('empleado_id');
            $table->foreign('empleado_id')->references('empleado_id')->on('tc_empleado');
            $table->datetime('hora')->useCurrent();
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('tipo_id')->on('tc_tipo');            
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
        Schema::drop('tt_marcaje');
    }
}
