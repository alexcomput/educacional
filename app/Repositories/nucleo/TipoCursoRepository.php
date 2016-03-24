<?php

namespace App\Repositories\nucleo;

use App\Models\nucleo\TipoCurso;
use InfyOm\Generator\Common\BaseRepository;

class TipoCursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoCurso::class;
    }
}
