<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class referencia extends Model
{
    //
    protected $table = "referencias";
    protected $fillable = ['nomFamiliar','telFamiliar','dirFamiliar','nomPersonal','telPersonal','dirPersonal' ,'idCliente'];
       
}
