<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class stockController extends Controller
{
    //

     public function index() {
        //$aux11= \App\listaDeCompra::All();
    	$Vproducto= producto::All();
      
    	//return view('compras.create',compact('proveedor','aux11'));	
        //return view('productos.create',compact('marca'));   */
        return view('stock.index',compact('Vproducto'));

    }
}
