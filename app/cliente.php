<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class cliente extends Model
{
    //
    protected $table="clientes";
    protected $fillable = ['nomCliente','dui','telCliente','nit','ingreso','dirCliente','estCliente'];
    public static function sacarReferenciasXcliente($idCli){      
    return DB::table('referencias')
      
       ->join('clientes', 'referencias.idCliente', '=', 'clientes.id')
       
       ->where('clientes.id','=',$idCli )
       
        ->select('referencias.*','clientes.nomCliente')
        ->orderBy('referencias.id')
        ->get();
   }
}
