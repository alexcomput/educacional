<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Usuario
 * @package App\Models
 */
class Usuario extends Model
{

    public $table = "usuario";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        "senha",
        "login",
        "pessoa_id",
        "deleted_at"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
        "senha" => "string",
        "login" => "string",
        "pessoa_id" => "integer",
        "deleted_at" => "datetime"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    
    public function pessoa(){
        return $this->belongsTo("App\Models\Pessoa");
    }

    public function perfils(){
        return $this->belongsToMany("App\Models\Perfil");
    }
}
