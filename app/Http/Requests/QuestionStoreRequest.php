<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionStoreRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        $rules = [
//            'exam_id' => 'required|integer',
            'category_id' => 'required|integer',
            'description' => 'required|min:3',
            'iframe' => 'required'
        ];

        if($this->get('image')){
            $rules = array_merge($rules, ['image' => 'mime:jpg,jpeg,png']);
        }

        return $rules;
    }
}
