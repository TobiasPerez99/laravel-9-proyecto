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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('modelo');
            $table->string('año');
            $table->string('dueños');
            $table->string('consesionaria');
            $table->boolean('destacado');
            $table->string('color');
            $table->string('marca');
            $table->bigInteger('kilometros');
            $table->string('precio');
            $table->string('motor');
            $table->string('transmision');
            $table->string('puertas');
            $table->string('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
};
