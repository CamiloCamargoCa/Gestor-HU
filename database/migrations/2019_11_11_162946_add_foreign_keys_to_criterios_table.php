<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCriteriosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('criterios', function(Blueprint $table)
		{
			$table->foreign('id_proyecto', 'criterios_ibfk_1')->references('id')->on('proyectos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_historia', 'criterios_ibfk_2')->references('id')->on('historias_usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('criterios', function(Blueprint $table)
		{
			$table->dropForeign('criterios_ibfk_1');
			$table->dropForeign('criterios_ibfk_2');
		});
	}

}
