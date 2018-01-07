<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    protected $table="clientes";
    protected $fillable = ['nomCliente','dui','telCliente','nit','ingreso','dirCliente','estCliente'];
}
