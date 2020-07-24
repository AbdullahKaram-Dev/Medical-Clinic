<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
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
            'name'=>['required','string','between:5,50'],
            'title_jop'=>['required','string','between:5,50'],
            'email'=>['required','email','between:5,50',Rule::unique('doctors','email')],
            'avatar'=>['required','image'],
            'facebook_link'=>['required','url','between:5,190',Rule::unique('doctors','facebook_link')],
            'twitter_link'=>['required','url','between:5,190',Rule::unique('doctors','twitter_link')],
            'linked-in_link'=>['required','url','between:5,190',Rule::unique('doctors','linked-in_link')],
            'mobile_number'=>['required','numeric',Rule::unique('doctors','mobile_number')],
            'status'=>['required',Rule::in(['active','deactivate'])]
        ];
    }
}
