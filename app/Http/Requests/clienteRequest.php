<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clienteRequest extends FormRequest
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
            
        'dui'=>'unique:clientes',
        'nit'=>'unique:clientes',
        'telCliente'=>'unique:clientes',
         
    
        ];
    }
    public function messages(){
       return [
         'dui.unique' => '¡Numero de DUI ya registrado!',
         'nit.unique' => '¡Numero de NIT ya registrado!',
         'telCliente.unique' => '¡Numero de TELEFONO ya registrado!',
         
     ];
     }
}
