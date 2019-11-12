<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleados', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cedula')->nullable();
			$table->string('nombre', 120)->nullable();
			$table->string('salario', 60)->nullable();
			$table->integer('Estado')->nullable();
			$table->integer('id_roll')->nullable()->index('id_roll');
			$table->integer('id_proyecto')->nullable()->index('id_proyecto');
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
		Schema::drop('empleados');
	}

}
