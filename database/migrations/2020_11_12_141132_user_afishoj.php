<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserAfishoj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Centerpost', function (Blueprint $table) {
        $table->id();
        $table->string('id_user');
        $table->string('center');
        $table->string('title');
        $table->string('description1');
        $table->string('description2');
        $table->string('description3');
        $table->string('file1');
        $table->string('file2');
        $table->string('file3');
        $table->timestamp('email_verified_at')->nullable();
        $table->rememberToken();
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
        //
    }
}
