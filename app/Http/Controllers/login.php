<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\proveedor;
use App\producto;

class login extends Controller
{




    //
     public function create() {
    	$proveedor= proveedor::All();
      
    	return view('clientes.create',compact('proveedor'));	
        //return view('productos.create',compact('marca'));   
    }

    //y el estore es para guardar los del create
    public function store(request $request) { 
    	//
    producto::create([
     		//modelo     			//la vista create
            'nomProducto' => $request['nomProducto'],  
            'catProducto' => $request['catProducto'],
            'preProducto' => $request['preProducto'], 
            'idProveedor' => $request['idProveedor'], 
            'marcProducto' => $request['marcProducto'],           
        ]);
     //adonde vamos
        return redirect('producto')->with('message','create');
    }
     public function index() {  
        $producto= producto::All();
                 
        return view('loggin.log',compact('producto'));    	
    }
    }








