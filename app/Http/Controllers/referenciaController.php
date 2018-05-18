<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\referencia;
use App\cliente;
class referenciaController extends Controller
{
    //
    public function create() {
    
        return view('clientes.referencia');  
    }

    //y el estore es para guardar los del create
    public function store(request $request) { 
        //
    \App\referencia::create([
            //modelo                //la vista create
            'nomFamiliar' => $request['nombre1'],  
            'telFamiliar' => $request['telefono1'],
            'dirFamiliar' => $request['direccion1'], 
            'nomPersonal' => $request['nombre2'], 
            'telPersonal' => $request['telefono2'],  
            'dirPersonal' => $request['direccion2'],    
            'idCliente' => $request['idCliente'],     
        ]);


   $trab = \App\cliente::find($request['idCliente']);
   foreach ($trab as $valor)
   	{
        $trab->estCliente= FALSE;
        $trab->save();
    }
  \App\Bitacora::bitacora("Registro de nueva Referencia de Cliente: ".$trab->nomCliente);
     //adonde vamos
       return redirect('/referencia')->with('message','create');
    }




     public function index() {  
        $referencias= referencia::All();
                 
        return view('clientes.verReferencias',compact('referencias'));      
    }




    public function update(Request $request, $id)  //los recues llevan toda la info de form
    {
        $trab = \App\referencia::find($id);
       
       
        
        $trab->nomFamiliar = $request['nombre1'];
         $trab->telFamiliar = $request['telefono1'];
       $trab->dirFamiliar = $request['direccion1'];
        $trab->nomPersonal= $request['nombre2'];
        $trab->telPersonal= $request['telefono2'];
        $trab->dirPersonal= $request['direccion2'];

       
        //$trab->sueldoEmp = $request['salario'];
        //$trab->cargoEmp = $request['cargo'];
        
        
        //$trab->sexEmp = $request['sexo'];correoEmp
        //$trab->contraEmp = $request['desc'];
       


        $trab->save();
        
              \App\Bitacora::bitacora("Modificacion de Referencia  ");

    return redirect('/referencia');
    }

}


