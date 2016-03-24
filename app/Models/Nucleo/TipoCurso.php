<?php

namespace App\Models\nucleo;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class TipoCurso
 * @package App\Models
 */
class TipoCurso extends Model
{

    public $table = "tipo_curso";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        "descricao",
        "obs", 
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
        "descricao" => "string",
        "obs" => "string", 
    ];

    /**
     * Validation rules
     *
     * @var 
     */
    public static $rules = [
        'descricao'=>'required|max:5'
    ];

    
}
