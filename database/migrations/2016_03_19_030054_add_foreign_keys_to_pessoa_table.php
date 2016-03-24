<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPessoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pessoa', function(Blueprint $table)
		{
			$table->foreign('endereco_id', 'foreign_key01')->references('id')->on('endereco')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoa', function(Blueprint $table)
		{
			$table->dropForeign('foreign_key01');
		});
	}

}
