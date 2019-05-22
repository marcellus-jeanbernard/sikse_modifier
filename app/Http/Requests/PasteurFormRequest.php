<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;
use App\Eglise;
class PasteurFormRequest extends FormRequest
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
            
            'nom' => 'required',
            'email' =>'required',
             'address'=>'required',

            'phone' =>'required',
            'eglise_id' =>'required',
            'sexe' =>'required',
            
            'image' => 'required|mimes:jpeg,png,gif'



        ];
    }
}
