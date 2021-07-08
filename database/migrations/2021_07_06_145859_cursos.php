<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cursos', function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->date('inicio');
            $table->date('fin');
            $table->string('ubicuacion');
            $table->integer('departamento_id');
            $table->integer('municipio_id');
            $table->integer('horas_curso');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('modalidad_id');
            $table->integer('tipocosto_id');
            $table->decimal('costo',$precision = 8, $scale = 2);
            $table->integer('cantidad_evaluacion')->nullable();
            $table->string('orden_compra')->nullable();
            $table->string('compra_bolsa')->nullable();
            $table->integer('item');
            $table->integer('programa_id');
            $table->integer('facilitador');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
