<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class pago extends Model
{
    //
       protected $table = "pagos";
 	protected $fillable = ['fecPago','pendiente','monto','mora','cuotas','idfactura','estado'];

 	public static function pagosXCliente($id){
       return DB::table('factura_venta2s')
            ->join('pagos', 'pagos.idfactura', '=', 'factura_venta2s.id')

            ->where('factura_venta2s.idcliente','=',$id)
            ->where('pagos.estado','=',true)

            ->select('factura_venta2s.*',  'pagos.*')
            ->orderBy('factura_venta2s.id')
            ->get();
 
   }
}
