<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('rut',10)->unique();
            $table->string('dni_number');
            $table->date('birth_date');
            $table->string('email')->unique();
            $table->string('email_ads')->comentary('Email donde le llegaran los anuncion');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->boolean('active');
            $table->text('sbif_password')->nullable();
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
        Schema::dropIfExists('users');
    }
}
