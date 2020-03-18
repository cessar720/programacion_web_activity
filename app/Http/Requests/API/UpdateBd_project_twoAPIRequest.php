<?php

namespace App\Http\Requests\API;

use App\Models\Bd_project_two;
use InfyOm\Generator\Request\APIRequest;

class UpdateBd_project_twoAPIRequest extends APIRequest
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
        $rules = Bd_project_two::$rules;
        
        return $rules;
    }
}
