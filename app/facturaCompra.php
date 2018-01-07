<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class facturaCompra extends Model
{
    //
      protected $table = "factura_compras";      //Aqui se define el nombre de la tabla
    //tipopago;     Es para saber la forma en la institucion esta dispuesta apagar por la compra
    //montocompra;  Es el total apagar por la compra.
    //fechacompra;  Es para tener un contra de la fecha en que se compro dichos productos
    //idprovs;      Es saber a que proveedor le compro los productos.
    protected $fillable = ['tipopago', 'montocompra', 'fechacompra','nfactura'];//Aqui creamos los campos de la tabla 

 


	public static function sacarComprasPorFecha($finicial,$ffinal){      
		return DB::table('factura_compras')
      
       
        
          ->where('factura_compras.fechacompra','>=',$finicial )
       ->where('factura_compras.fechacompra','<=',$ffinal )
            
            ->select('factura_compras.*')
            ->orderBy('factura_compras.id')
            ->get();
   }

}
