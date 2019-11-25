<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_role', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nama')->nullable();
			$table->integer('level')->nullable();
			$table->date('created_at')->nullable();
			$table->date('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('m_role');
	}

}
