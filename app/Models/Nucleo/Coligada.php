<?php

namespace App\Models\nucleo;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class nucleo/Coligada
 * @package App\Models
 */
class Coligada extends Model
{

    public $table = "coligada";

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        "nome",
        "cnpj",
        "razao_social",
        "telefone",
        "obs",
        "endereco_id",
        "deleted_at"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
        "nome" => "string",
        "cnpj" => "string",
        "razao_social" => "string",
        "telefone" => "string",
        "obs" => "string",
        "endereco_id" => "integer"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function tipoCursos()
    {
        return $this->hasMany('App\Models\nucleo\TipoCurso');
    }
}
;