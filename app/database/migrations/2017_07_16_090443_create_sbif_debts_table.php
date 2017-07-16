<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSbifDebtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sbif_debts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('debt_type_id');
			$table->integer('institution_id');
			$table->integer('debt_statement_id');
			$table->integer('mount');
			$table->date('date');
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
		Schema::drop('sbif_debts');
	}

}
