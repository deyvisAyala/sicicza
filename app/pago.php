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
            ->orderBy('pagos.id')
            ->get();
 
   }
    public static function pagosXCliente2($id,$estado){
       return DB::table('factura_venta2s')
            ->join('pagos', 'pagos.idfactura', '=', 'factura_venta2s.id')
              ->join('clientes', 'clientes.id', '=', 'factura_venta2s.idcliente')
            ->where('factura_venta2s.idcliente','=',$id)
            ->where('pagos.estado','=',$estado)

            ->select('factura_venta2s.*', 'clientes.*' ,'pagos.*')
            ->orderBy('pagos.id')
            ->get();
 
   }
 
 
}
