<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    //
    protected $table = "proveedors";
 	protected $fillable = ['nomProveedor','telProveedor','EmailProveedor','dirProveedor'];

       
}
