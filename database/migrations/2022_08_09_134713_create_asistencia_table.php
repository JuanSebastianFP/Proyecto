<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->unsignedBigInteger('IdInstructorFK');
            $table->unsignedBigInteger('IdAprendizFK');
            $table->unsignedBigInteger('IdCategoriaFK');
            $table->timestamps();

            $table->foreign('IdInstructorFK')->references('id')->on('instructor');
            $table->foreign('IdAprendizFK')->references('id')->on('aprendiz');
            $table->foreign('IdCategoriaFK')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencia');
    }
};
