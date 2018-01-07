<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class detallesCompra extends Model
{
    //
      protected $table = "detalles_compras";//Aqui se define el nombre de la tabla
    //definicion de campos 
    
    //preiocomp;     de compra
    //descimora; se recibio un descuento por compra
    //cancompra; es la cantidad de productos comprados
    //idprods;   es para saber la informacion de ese producto que sea adquirido
    //idcomps;   es para saber que compra que de que se adquirido.
    protected $fillable = ['preciocomp', 'descompra', 'cancompra', 'idprods', 'idcomps'];//Aqui creamos los campos de la tabla 

 public static function sacarComprasPorFactura($id){
   		 return DB::table('detalles_compras')
           
            ->join('productos', 'productos.id', '=', 'detalles_compras.idprods')
           	->join('proveedors', 'proveedors.id', '=', 'productos.idProveedor')
            ->where('detalles_compras.idcomps', '=', $id)
            ->select('detalles_compras.*',  'productos.nomProducto','proveedors.nomProveedor')
            ->orderBy('detalles_compras.id')
            ->get();
 
   }
}
