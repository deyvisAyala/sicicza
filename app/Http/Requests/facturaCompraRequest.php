<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class facturaCompraRequest extends FormRequest
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
            
        'nfactura'=>'unique:factura_compras',
         
    
        ];
    }
    public function messages(){
       return [
         'nfactura.unique' => '¡Numero de Factura ya registrado!',
         
     ];
     }
}
