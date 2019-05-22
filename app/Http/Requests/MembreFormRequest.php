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
        'address'=> 'required',
        'ccpc_id' =>'required',

        'fonction_id'=> 'required',
        'secteuractivite_id'=> 'required',
        'phone'=> 'required',
        'gap'=> 'required',
        'notion_de_base'=> 'required',
        'pretest_nb'=> 'required',
        'moyenne_pre'=> 'required',

        'post_test_nb'=> 'required',

        'moyenne_pos'=> 'required',

        'performance'=> 'required',
        'pretest_acc'=> 'required',

        'moyenne_pretest_acc'=> 'required',
        'post_test_acc'=> 'required'    
        ];
    }
}
