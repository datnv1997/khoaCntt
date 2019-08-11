<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToChiTietBaiVietTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('chi-tiet-bai-viet', function(Blueprint $table)
		{
			$table->foreign('id-ng-tao', 'chi-tiet-bai-viet_ibfk_1')->references('mgv')->on('giao-vien')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id-phan-loai', 'chi-tiet-bai-viet_ibfk_2')->references('id')->on('phan-loai-bai-viet')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('chi-tiet-bai-viet', function(Blueprint $table)
		{
			$table->dropForeign('chi-tiet-bai-viet_ibfk_1');
			$table->dropForeign('chi-tiet-bai-viet_ibfk_2');
		});
	}

}
