<?php

namespace App\Repositories\nucleo;

use App\Models\nucleo\Coligada;
use InfyOm\Generator\Common\BaseRepository;

class ColigadaRepository extends BaseRepository
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
        return Coligada::class;
    }
}
