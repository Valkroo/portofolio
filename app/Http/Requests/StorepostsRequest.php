<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepostsRequest extends FormRequest
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
            'title' =>  'required|max:225',
            'slug' =>  'required|unique:posts',
            'image' => 'image|file',
            'body' =>  'required',
        ];
    }
}
