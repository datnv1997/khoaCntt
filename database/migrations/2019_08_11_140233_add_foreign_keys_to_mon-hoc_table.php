<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMonHocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mon-hoc', function(Blueprint $table)
		{
			$table->foreign('ma-bo-mon', 'mon-hoc_ibfk_1')->references('mbm')->on('bo-mon')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mon-hoc', function(Blueprint $table)
		{
			$table->dropForeign('mon-hoc_ibfk_1');
		});
	}

}
