<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamUpdateRequest extends FormRequest{
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
        return [
            'user_id' => 'required|integer',
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'score' => 'required|min:0|max:100'
        ];
    }
    public function messages(){
        return[
            'title.required' => 'Debes agregar un nombre a tu examen',
            'title.min' => 'El nombre debe tener minimo 3 caracteres',
            'description.required' => 'Debes agregar una descripcion a tu examen',
            'description.min' => 'La descripcion debe tener minimo 3 caracteres',
            'score.required' => 'El puntaje es requerido',
            'score.min' => 'El puntaje minimo es cero',
            'score.max' => 'El puntaje maximo es 100',
        ];
    }
}
