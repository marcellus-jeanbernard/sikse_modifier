<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonvraiFormRequest extends FormRequest
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
            

             'nom'=> 'required',
        'prenom'=> 'required',
        'dateNaissance'=> 'required',
        'lieuNaissane'=> 'required',
        'statutCivil'=> 'required',
        'sexe'=> 'required',
        'adresse'=> 'required',
        'email'=> 'required',
        'phone'=> 'required',
        'profession'=> 'required',
        'groupeSanguin'=> 'required',
        'occupationactuelle_id'=> 'required',
        'secteuractivite_id'=> 'required',
        'coordination_id'=> 'required',
        'commission_id'=> 'required',

        'statut'=> 'required',
        'laquelle'=> 'required',
        'quandFrequenter'=> 'required',
        'nomPersNorm'=> 'required',
        'adressePersNorm'=> 'required',
        'emailPersNorm'=> 'required',
        'phonePersNorm'=> 'required',
        'lienPersNorm'=> 'required',
        'nomPersUrg'=> 'required',
        'adressePersUrg'=> 'required',
        'emailPersUrg'=> 'required',
        'phonePersUrg'=> 'required',
        'lienPersUrg'=> 'required',
        'image' => 'required|mimes:jpeg,png,gif'
            
        ];
    }
}
