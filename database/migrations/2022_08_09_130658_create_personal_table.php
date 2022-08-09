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
        Schema::create('personal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('TipoDocumento',30);
            $table->string('Cedula',30);
            $table->string('Email',100);
            $table->string('contrasena',30);
            $table->string('celular',15);
            $table->unsignedBigInteger('IdRolFK');
            $table->timestamps();

            $table->foreign('IdRolFK')->references('id')->on('rolusuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
};
