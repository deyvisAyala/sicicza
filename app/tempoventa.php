<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class tempoventa extends Model
{
	protected $table = "tempoventas";
        protected $fillable = ['cantidad', 'idProducto', 'precio'];

         public static function auxventa(){
   		 return DB::table('tempoventas')
            ->join('productos', 'productos.id', '=', 'tempoventas.idProducto')
            
            ->select('tempoventas.*','productos.nomProducto')
            ->orderBy('tempoventas.id')
            ->get();
    //
}
}
