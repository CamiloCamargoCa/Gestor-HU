<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cod_proyecto', 30)->nullable();
			$table->string('nombre', 60)->nullable();
			$table->integer('id_gerente')->nullable();
			$table->string('nombre_gerente')->nullable();
			$table->date('fec_ini_planeada')->nullable();
			$table->date('fec_ini_real')->nullable();
			$table->date('fec_fin_planeada')->nullable();
			$table->date('fec_fin_real')->nullable();
			$table->integer('esfu_planeado')->nullable();
			$table->integer('esfu_real')->nullable();
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
		Schema::drop('proyectos');
	}

}
