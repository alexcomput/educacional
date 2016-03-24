<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Perfil
 * @package App\Models
 */
class Perfil extends Model
{

    public $table = "perfil";
    
 const CREATED_AT = 'created_at';
 const UPDATED_AT = 'updated_at';



    public $fillable = [
        "descricao",
        "obs",
        "deleted_at"
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
        "deleted_at" => "datetime"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
