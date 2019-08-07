<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class CcpccommuneFormRequest extends FormRequest
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
            
            'name' => 'required',
            'email' =>'required',
            'adresse' =>'required',
            'telephone' =>'required',
            'departement_id' =>'required',
            'user_id',
            
            
            'nom_cordexecutif'=>'required',
            'prenom_cordexecutif'=>'required',
            'email_cordexecutif'=>'required',
            'adresse_cordexecutif'=>'required',
            'telephone_cordexecutif'=>'required',

            'nom_cordlogistique'=>'required',
            'prenom_cordlogistique'=>'required',
            'email_cordlogistique'=>'required',
            'adresse_cordlogistique'=>'required',
            'telephone_cordlogistique'=>'required',
            'image1',
            'image2'


            



        ];
    }
}
