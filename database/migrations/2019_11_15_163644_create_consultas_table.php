<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('edad');
            $table->char('pais');
            $table->char('profesional');
            $table->integer('afirmacion1');
            $table->integer('afirmacion2');
            $table->integer('afirmacion3');
            $table->integer('afirmacion4');
            $table->integer('afirmacion5');
            $table->integer('afirmacion6');
            $table->integer('afirmacion7');
            $table->integer('afirmacion8');
            $table->integer('afirmacion9');
            $table->integer('afirmacion10');
            $table->integer('afirmacion11');
            $table->char('comentario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
