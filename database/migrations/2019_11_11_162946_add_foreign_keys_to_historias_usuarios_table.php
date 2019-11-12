<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHistoriasUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('historias_usuarios', function(Blueprint $table)
		{
			$table->foreign('id_proyecto', 'historias_usuarios_ibfk_2')->references('id')->on('proyectos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('roll_id', 'historias_usuarios_ibfk_3')->references('id')->on('rolles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('historias_usuarios', function(Blueprint $table)
		{
			$table->dropForeign('historias_usuarios_ibfk_2');
			$table->dropForeign('historias_usuarios_ibfk_3');
		});
	}

}
