<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBaiGiangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bai-giang', function(Blueprint $table)
		{
			$table->foreign('id-ng-tao', 'bai-giang_ibfk_1')->references('mgv')->on('giao-vien')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id-mon-hoc', 'bai-giang_ibfk_2')->references('mmh')->on('mon-hoc')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bai-giang', function(Blueprint $table)
		{
			$table->dropForeign('bai-giang_ibfk_1');
			$table->dropForeign('bai-giang_ibfk_2');
		});
	}

}
