<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
//use Illuminate\Http\Exceptions\HttpResponseException;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //授權要記得打開 return false=> true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'content' => 'required|min:3',
            'file' => 'required|mimes:jpeg,png|max:20480'
            //'active' => 'required'
        ];
    }

    // public function failedValidation(Validator $validator)
    // {
    //     $errors = $validator->errors();
    //     $response = response()->json([
    //         'message' => 'Invalid data send',
    //         'details' => $errors->messages(),
    //     ], 422);
    //     throw new HttpResponseException($response);
    //     //throw new HttpResponseException($errors);
    // }
}
