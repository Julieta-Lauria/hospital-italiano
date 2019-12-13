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
            $table->char('ambito');
            $table->integer('afirmacion1')->nullable();
            $table->integer('afirmacion2')->nullable();
            $table->integer('afirmacion3')->nullable();
            $table->integer('afirmacion4')->nullable();
            $table->integer('afirmacion5')->nullable();
            $table->integer('afirmacion6')->nullable();
            $table->integer('afirmacion7')->nullable();
            $table->integer('afirmacion8')->nullable();
            $table->integer('afirmacion9')->nullable();
            $table->integer('afirmacion10')->nullable();
            $table->integer('afirmacion11')->nullable();
            $table->longText('comentario')->nullable();
            $table->longText('form_html')->nullable();

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
