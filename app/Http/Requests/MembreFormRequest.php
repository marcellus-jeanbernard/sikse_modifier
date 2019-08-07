<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembreFormRequest extends FormRequest
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
            
             'code'=> '',

             'nom'=> 'required',
        'prenom'=> 'required',
        'sexe'=> 'required',
        
        'email'=> 'required',
        'nif'=> 'required',
        'cin'=> 'required',
        'profession'=> 'required',
        'employer'=> 'required',

        'address'=> 'required',
        'ccpccommune_id' =>'required',

        'fonction_id'=> 'required',
        'secteuractivite_id'=> 'required',
        'phone'=> 'required',
        'date_entrer'=> '',
        'image'=> 'required'    
        ];
    }
}
