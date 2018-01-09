<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class facturaVenta2 extends Model
{
    protected $table = "factura_venta2s";
      protected $fillable = ['descripcion', 'montov', 'fechav','numfactura','idcliente'];


      public static function sacarVentasPorFecha($finicial,$ffinal){      
    return DB::table('factura_venta2s')
      
       ->join('clientes', 'clientes.id', '=', 'factura_venta2s.idcliente')
          ->where('factura_venta2s.fechav','>=',$finicial )
       ->where('factura_venta2s.fechav','<=',$ffinal )
            
            ->select('factura_venta2s.*','clientes.nomCliente')
            ->orderBy('factura_venta2s.id')
            ->get();
   }

}
