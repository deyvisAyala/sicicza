<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class listaDeCompra extends Model
{
    //
          protected $table = "lista_de_compras";
        protected $fillable = ['preciocomp2', 'descompra2', 'cancompra2', 'idprods2'];//Aqui creamos los campos de la tabla 

         public static function auxComp($id){
   		 return DB::table('lista_de_compras')
            ->join('productos', 'productos.id', '=', 'lista_de_compras.idprods2')
            ->where('productos.idProveedor','=',$id)
            ->select('lista_de_compras.*','productos.nomProducto')
            ->orderBy('lista_de_compras.id')
            ->get();
   }

}
