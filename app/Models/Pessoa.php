<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Pessoa
 * @package App\Models
 */
class Pessoa extends Model
{

 public $table = "pessoa";
    
 const CREATED_AT = 'created_at';
 const UPDATED_AT = 'updated_at';

protected $dates = ['deleted_at'];


    public $fillable = [
        "nome",
        "cpf",
        "rg",
        "sexo",
        "raca",
        "data_nascimento",
        "estado_civil",
        "naturalidade",
        "nacionalidade",
        "pai_nome",
        "pai_cpf",
        "mae_nome",
        "mae_cpf",
        "email",
        "telefone_celular",
        "telefone_residencial",
        "telefone_comercial",
        "ramal",
        "fax",
        "ativo",
        "data_emissao_rf",
        "endereco_id",
     ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
        "nome" => "string",
        "cpf" => "string",
        "rg" => "string",
        "sexo" => "string",
        "raca" => "string",
        "data_nascimento" => "date",
        "estado_civil" => "string",
        "naturalidade" => "string",
        "nacionalidade" => "string",
        "pai_nome" => "string",
        "pai_cpf" => "string",
        "mae_nome" => "string",
        "mae_cpf" => "string",
        "email" => "string",
        "telefone_celular" => "string",
        "telefone_residencial" => "string",
        "telefone_comercial" => "string",
        "ramal" => "string",
        "fax" => "string",
        "ativo" => "boolean",
        "data_emissao_rf" => "date",
        "endereco_id" => "integer"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function endereco()
    {
        return $this->belongsTo('App\Models\Endereco');
    }
}
