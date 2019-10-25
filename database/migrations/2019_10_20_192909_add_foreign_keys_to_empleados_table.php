<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('empleados', function(Blueprint $table)
		{
			$table->foreign('id_proyecto', 'empleados_ibfk_1')->references('id')->on('proyectos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_roll', 'empleados_ibfk_2')->references('id')->on('rolles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('empleados', function(Blueprint $table)
		{
			$table->dropForeign('empleados_ibfk_1');
			$table->dropForeign('empleados_ibfk_2');
		});
	}

}
