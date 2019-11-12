<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRollesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rolles', function(Blueprint $table)
		{
			$table->foreign('id_proyecto', 'rolles_ibfk_1')->references('id')->on('proyectos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rolles', function(Blueprint $table)
		{
			$table->dropForeign('rolles_ibfk_1');
		});
	}

}
