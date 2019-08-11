<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDanhSachBaiVietTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('danh-sach-bai-viet', function(Blueprint $table)
		{
			$table->foreign('id-ng-tao', 'danh-sach-bai-viet_ibfk_1')->references('id-ng-tao')->on('chi-tiet-bai-viet')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id-phan-loai', 'danh-sach-bai-viet_ibfk_2')->references('id')->on('phan-loai-bai-viet')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('danh-sach-bai-viet', function(Blueprint $table)
		{
			$table->dropForeign('danh-sach-bai-viet_ibfk_1');
			$table->dropForeign('danh-sach-bai-viet_ibfk_2');
		});
	}

}
