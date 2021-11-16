<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombrepry')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('imgpry')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_proyectos');
    }
}
