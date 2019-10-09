<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRollesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rolles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre', 60)->nullable();
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
		Schema::drop('rolles');
	}

}
