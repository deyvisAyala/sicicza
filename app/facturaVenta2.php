<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facturaVenta2 extends Model
{
    protected $table = "factura_venta2s";
      protected $fillable = ['descripcion', 'montov', 'fechav','numfactura','idcliente'];

}
