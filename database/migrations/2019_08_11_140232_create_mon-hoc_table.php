<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMonHocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mon-hoc', function(Blueprint $table)
		{
			$table->string('mmh', 100)->primary();
			$table->string('ten-mh', 200);
			$table->string('ma-bo-mon', 300)->index('ma-bo-mon');
			$table->string('ten-bm', 200);
			$table->integer('so-tin-chi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mon-hoc');
	}

}
