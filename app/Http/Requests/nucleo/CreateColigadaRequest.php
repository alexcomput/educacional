<?php

namespace App\Http\Requests\nucleo;

use App\Http\Requests\Request;
use App\Models\nucleo\Coligada;

class CreateColigadaRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Coligada::$rules;
    }
}
