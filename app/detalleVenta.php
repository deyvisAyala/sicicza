<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleVenta extends Model
{
    //
      protected $table = "detalle_ventas";
      protected $fillable = ['nomProducto', 'preVenta', 'cantidad','idfactura','idProducto'];



}
