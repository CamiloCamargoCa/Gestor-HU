<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoriasUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historias_usuarios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_proyecto')->nullable()->index('id_proyecto');
			$table->string('tipo_historia', 120)->nullable();
			$table->string('titulo_historia', 120)->nullable();
			$table->integer('roll_id')->nullable()->index('roll_id');
			$table->text('descripcion', 65535)->nullable();
			$table->text('reque_interfaz', 65535)->nullable();
			$table->integer('dependencia')->nullable();
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
		Schema::drop('historias_usuarios');
	}

}
