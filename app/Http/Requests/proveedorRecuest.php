<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class proveedorRecuest extends FormRequest
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
            'nomProveedor'=>'unique:proveedors',
            'telProveedor'=>'unique:proveedors',
            'EmailProveedor'=>'unique:proveedors',
        ];
    }

    public function messages(){
       return [
         'nomProveedor.unique' => '¡Nombre de PROVEEDOR ya registrado!',
         'telProveedor.unique' => '¡Numero de TELEFONO ya registrado!',
         'EmailProveedor.unique' => 'Correo ELECTRONICO ya registrado!',
         
         
     ];
     }
}
