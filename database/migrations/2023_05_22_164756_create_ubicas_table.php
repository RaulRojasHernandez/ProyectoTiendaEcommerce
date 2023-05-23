<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicas', function (Blueprint $table) {
            $table->id();
            $table->string('Estado');
            $table->string('Municipio');
            $table->string('Delegacion');
            $table->string('calle');
            $table->integer('Exterior');
            $table->integer('Interior');
            $table->string('Descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicas');
    }
}
