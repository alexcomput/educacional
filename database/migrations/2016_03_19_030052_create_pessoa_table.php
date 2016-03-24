<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome');
			$table->string('cpf', 15);
			$table->string('rg', 10);
			$table->timestamps();
			$table->string('sexo', 30)->nullable();
			$table->string('raca', 30)->nullable();
			$table->date('data_nascimento')->nullable();
			$table->string('estado_civil', 30)->nullable();
			$table->string('naturalidade', 50)->nullable();
			$table->string('nacionalidade', 50)->nullable();
			$table->string('pai_nome', 100)->nullable();
			$table->string('pai_cpf', 15)->nullable();
			$table->string('mae_nome', 100)->nullable();
			$table->string('mae_cpf', 15)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('telefone_celular', 141)->nullable();
			$table->string('telefone_residencial', 15)->nullable();
			$table->string('telefone_comercial', 15)->nullable();
			$table->string('ramal', 4)->nullable();
			$table->string('fax', 15)->nullable();
			$table->boolean('ativo')->nullable();
			$table->date('data_emissao_rf')->nullable();
			$table->integer('endereco_id')->nullable();
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
		Schema::drop('pessoa');
	}

}
