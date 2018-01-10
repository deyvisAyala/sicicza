<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class facturaVentaRequest extends FormRequest
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
            
        'numfactura'=>'unique:factura_venta2s',
         
    
        ];
    }
    public function messages(){
       return [
         'numfactura.unique' => '¡Numero de Factura ya registrado!',
         
     ];
     }
}
