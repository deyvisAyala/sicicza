<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facturaController extends Controller
{
     public function create() {
         $aux= tempoventa::All();
         $producto=producto::All();
    
    	return view('ventas.create',compact('aux')); 
    }
    
      public function store(request $request) { 
    	//
    facturaCompra::create([
     		//modelo     			//la vista create
            'descripcion' => $request['des'],  
            'montov' => $request['monto'],
            'fechav' => $request['fecha'], 
            'facturav' => $request['numfac'], 
             'idcliente' => $request['id'], 
                     
        ]);
    
        $gAux =facturaCompra::All();
        foreach ($gAux as $fac) {
            $ids=$fac->id;
        }

        }
}
