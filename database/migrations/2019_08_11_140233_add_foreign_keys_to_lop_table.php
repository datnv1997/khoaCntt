<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lop', function(Blueprint $table)
		{
			$table->foreign('mgv-cn', 'lop_ibfk_1')->references('mgv')->on('giao-vien')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lop', function(Blueprint $table)
		{
			$table->dropForeign('lop_ibfk_1');
		});
	}

}
