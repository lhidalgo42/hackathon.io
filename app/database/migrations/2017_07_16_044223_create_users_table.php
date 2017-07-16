<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('rut',11)->unique();
            $table->string('dni_number');
            $table->string('email')->unique();
            $table->string('email_ads');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('address');
            $table->string('password', 60);
            $table->string('password_sbif');
            $table->boolean('active')->default(0);
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
		Schema::drop('users');
	}

}
