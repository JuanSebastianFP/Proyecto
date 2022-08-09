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
        Schema::create('categoria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',30);
            $table->unsignedBigInteger('IdInstructorFK');
            $table->unsignedBigInteger('IdAprendizFK');
            $table->timestamps();

            $table->foreign('IdInstructorFK')->references('id')->on('instructor');
            $table->foreign('IdAprendizFK')->references('id')->on('aprendiz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
    }
};
