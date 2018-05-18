<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class detalleVenta extends Model
{
    //
      protected $table = "detalle_ventas";
      protected $fillable = ['nomProducto', 'preVenta', 'cantidad','idfactura','idProducto'];


     public static function sacarVentasPorFactura($id){
   		 return DB::table('detalle_ventas')
           
            ->join('productos', 'productos.id', '=', 'detalle_ventas.idProducto')
            ->join('proveedors', 'proveedors.id', '=', 'productos.idProveedor')
            ->where('detalle_ventas.idfactura', '=', $id)
            ->select('detalle_ventas.*',  'productos.nomProducto','proveedors.nomProveedor')
            ->orderBy('detalle_ventas.id')
            ->get();
 
    }

   public static function sacarVentasPorProductos($id){
       return DB::table('detalle_ventas')
           
            ->join('factura_venta2s', 'factura_venta2s.id', '=', 'detalle_ventas.idfactura')
            ->where('detalle_ventas.idProducto', '=', $id)
            ->select('factura_venta2s.*','detalle_ventas.*')
            ->orderBy('factura_venta2s.created_at')
            ->get();
 
   }


  

}
