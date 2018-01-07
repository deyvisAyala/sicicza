<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listavenController extends Controller
{
    public function create() {
         $aux= \App\tempoventa::All();
         $producto=\App\producto::All();
    
    	return view('ventas.create',compact('aux')); 
    }

    //y el estore es para guardar los del create
    public function store(request $request) { 
    	//

    	 $trab = \App\producto::find($request['cargar']);
         $total=$trab->existencia-$request['telefono'];
         if($total>=0)
            {
          $trab->existencia =  $trab->existencia-$request['telefono'];
          $trab->save();
         \App\tempoventa::create([
     		//modelo     			//la vista create
            
            'cantidad' => $request['telefono'],
            'idProducto' => $request['cargar'],
            'precio' => $request['preUnitario'],
            
                       
        ]);

        return redirect('ventas/create')->with('message','create');
     }
     else{
        return redirect('ventas/create')->with('message','stock');
     }
}
public function index() {  
        $aux= \App\tempoventa::All();
                 
         return view('ventas.create',compact('aux'));    	
     
    }
 public function destroy($id)
    {
     
    $auxeliminar= \App\tempoventa::find($id);//buscar por ID
    $trab = \App\producto::find($auxeliminar->idProducto);
    $trab->existencia =  $trab->existencia+$auxeliminar->cantidad;
    $auxeliminar->delete();
    
    $trab->save();
        $id='ventas/create';
       return redirect($id); 
    }
}
