<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class marcaRequest extends FormRequest
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
            //
            'nomMarca'=>'unique:marcas',
        ];
    }

     public function messages(){
       return [
         'nomMarca.unique' => '¡Nombre de MARCA ya registrado!',
         
         
     ];
     }
}
