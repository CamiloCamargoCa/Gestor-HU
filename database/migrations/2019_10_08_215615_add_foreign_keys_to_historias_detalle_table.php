<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHistoriasDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('historias_detalle', function(Blueprint $table)
		{
			$table->foreign('id_historia', 'historias_detalle_ibfk_1')->references('id')->on('historias_usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('historias_detalle', function(Blueprint $table)
		{
			$table->dropForeign('historias_detalle_ibfk_1');
		});
	}

}
