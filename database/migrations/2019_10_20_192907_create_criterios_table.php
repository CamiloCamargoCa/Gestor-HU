<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCriteriosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('criterios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_proyecto')->nullable()->index('id_proyecto');
			$table->integer('id_historia')->nullable()->index('id_historia');
			$table->text('descripcion', 65535)->nullable();
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
		Schema::drop('criterios');
	}

}
