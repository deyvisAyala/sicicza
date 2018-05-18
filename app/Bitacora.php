<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class Bitacora extends Model
{
    //

    protected $table = 'bitacoras';
  	protected $fillable = ['idUsuario','accion'];





  	public static function bitacora($accion){

          Bitacora::create([
          'idUsuario'=>Auth::user()->id,
          'accion'=>$accion,
        ]);
      }



       public static function barCan(){
   		 return DB::table('bitacoras')
            ->join('users', 'bitacoras.idUsuario', '=', 'users.id')
            
            ->select('bitacoras.*',  'users.name')
            ->orderBy('bitacoras.id','desc')
            ->get();
        } 


}
