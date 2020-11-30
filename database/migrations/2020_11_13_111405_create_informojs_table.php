<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformojsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informojs', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('center');
            $table->string('name');
            $table->string('lokejo');
            $table->string('lando');
            $table->string('bibliothque');
            $table->string('mangheblo');
            $table->string('libroservo');
            $table->string('dormeblo');
            $table->string('kursejoklasochambro');
            $table->string('jaro');
            $table->string('Telefono');
            $table->string('trajto');
            $table->string('agado');
            $table->string('Kontaktadreso');
            $table->string('retejo');
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
        Schema::dropIfExists('informojs');
    }
}
