<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuRequest extends FormRequest
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
        return [
            'bu_name'=>"required",
            'bu_price'=>"required",
            'bu_rent'=>"required",
            'bu_square'=>"required",
            'bu_type'=>"required",
            'bu_small_dis'=>"required",
            'bu_meta'=>"required",
            'rooms' =>"required",
            'bu_langtude'=>"required",
            'bu_latitude'=>"required",
            'bu_large_dis'=>"required",
            'bu_status'=>"required",


        ];
    }
}
