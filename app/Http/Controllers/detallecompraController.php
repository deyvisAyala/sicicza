<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detallecompraController extends Controller
{
   


    //el create es´para levantar el formulario
     public function create() {
    
    	return view('login.inicio');	
    }

    //y el estore es para guardar los del create
    public function store(request $request) { 
    	//
     \App\listaDeCompra::create([
     		//modelo     			//la vista create
            'preciocomp2' => $request['precio'],
            'descompra2' => 0,
            'cancompra2' => $request['cantidad'],
            'idprods2' => $request['idProducto'],            
        ]);
     //adonde vamos
        //$producto= \App\producto::where('idProveedor',1)->get(); 
       // $proveedor= \App\proveedor::All();
        //$aux11= \App\listaDeCompra::All();
     $id='compras/'.$request['idProveedor'].'';
       return redirect($id);

    }

    public function index() {  
        $aux11= \App\listaDeCompra::All();
                 
        return view('compras.create',compact('aux11'));    	
     
    }


     public function destroy($id)
    {
     
    $auxeliminar= \App\listaDeCompra::find($id);//buscar por ID

    $producto= \App\producto::find($auxeliminar->idprods2);
     

    $auxeliminar->delete();
        $id='compras/'.$producto->idProveedor.'';
       return redirect($id); 
    }
     public function show($id)
    {
       
       $compra= \App\detallesCompra::sacarComprasPorFactura($id);
        return view('compras.detalle',compact('compra'));
    }

    
}
