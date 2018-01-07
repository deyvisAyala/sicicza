<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
use DB; 
class producto extends Model
{
    //
       protected $table = "productos";
 	protected $fillable = ['nomProducto','catProducto','preProducto','idProveedor','idMarca','stock' ,'cPromedio','existencia'];
       

     public static function proPro(){
   		 return DB::table('productos')
            ->join('proveedors', 'productos.idProveedor', '=', 'proveedors.id')
            ->join('marcas', 'marcas.id', '=', 'productos.idMarca')

            ->select('productos.*',  'proveedors.nomProveedor','marcas.nomMarca')
            ->orderBy('productos.id')
            ->get();
 
   }

 public static function mostrar($id){
   		 return DB::table('productos')
            ->join('proveedors', 'productos.idProveedor', '=', 'proveedors.id', 'and', 'productos.id', '=', $id)
            
            ->select('productos.id','productos.nomProd','productos.marca','productos.desc','productos.estProducto',  'proveedors.nomProveedor')
            ->get();
   }
    public static function mostrarxProveedor($id){
       return DB::table('productos')
            ->join('proveedors', 'productos.idProveedor', '=', 'proveedors.id')
                ->join('marcas', 'marcas.id', '=', 'productos.idMarca')
            ->where('proveedors.id','=',$id)
            ->select('productos.*' , 'proveedors.nomProveedor','marcas.nomMarca')
            ->get();
   }

   public static function mostrarxMarca($id){
       return DB::table('productos')  
            ->where('productos.idMarca','=',$id)
            ->where('productos.estProducto','=',1)
            ->where('productos.existencia','>',0)
            
            
            ->select('productos.*' )
            ->get();
   }

   public static function mostrarxProve($id){
       return DB::table('productos')
            ->join('proveedors', 'productos.idProveedor', '=', 'proveedors.id')
            ->where('productos.id','=',$id)
            ->select('productos.*',  'proveedors.nomProveedor')
            ->orderBy('productos.id')
            ->get();
 
   }

 
}

