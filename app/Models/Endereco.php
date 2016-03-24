<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Endereco
 * @package App\Models
 */
class Endereco extends Model
{

    public $table = "endereco";
    
 const CREATED_AT = 'created_at';
 const UPDATED_AT = 'updated_at';



    public $fillable = [
        "logradouro",
        "numero",
        "cep",
        "bairro",
        "cidade",
        "uf",
        "complemento",
        "deleted_at"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
        "logradouro" => "string",
        "numero" => "integer",
        "cep" => "string",
        "bairro" => "string",
        "cidade" => "string",
        "uf" => "string",
        "complemento" => "string"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
