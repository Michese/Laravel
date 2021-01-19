<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createNewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
//        return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category' => 'required|integer',
            'title' => 'required|max:255|min:5',
            'description' => 'string|max:255',
            'content' => 'required|min:10'
        ];
    }

    public function attributes()
    {
        return [
            'category' => 'Выберите категорию новости',
            'title' => 'Название',
            'description' => 'Описание новости',
            'content' => 'Текст новости'
        ];
    }
}
