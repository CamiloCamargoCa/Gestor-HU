<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoriasDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historias_detalle', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_historia')->nullable()->index('id_historia');
			$table->string('tamaño', 10)->nullable();
			$table->integer('esfuerzo_horas')->nullable();
			$table->integer('num_sprint')->nullable();
			$table->integer('num_release')->nullable();
			$table->integer('id_usuario')->nullable();
			$table->integer('id_desarrollador')->nullable();
			$table->integer('id_tester')->nullable();
			$table->integer('estado')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historias_detalle');
	}

}
