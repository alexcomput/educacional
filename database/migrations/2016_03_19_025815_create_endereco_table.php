<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('logradouro');
			$table->integer('numero')->nullable();
			$table->string('cep', 15)->nullable();
			$table->string('bairro', 100);
			$table->datetimetz('created_at')->nullable();
			$table->datetimetz('updated_at')->nullable();
			$table->string('cidade', 100);
			$table->string('uf', 2);
			$table->string('complemento', 100)->nullable();
			$table->time('deleted_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('endereco');
	}

}
