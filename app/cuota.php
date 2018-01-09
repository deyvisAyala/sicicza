<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class cuota extends Model
{
    //
    //
       protected $table = "cuotas";
 	protected $fillable = ['fecha','total','monto','mora','idpago'];
       public static function cuotasyPagos($id){
       return DB::table('cuotas')
            ->join('pagos', 'pagos.id', '=', 'cuotas.idpago')
            ->where('cuotas.idpago','=',$id)
            ->select('cuotas.*', 'pagos.*')
            ->orderBy('cuotas.id')
            ->get();
 
   }
     
}
