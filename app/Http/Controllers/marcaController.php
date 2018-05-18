<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\marcaRequest;
class marcaController extends Controller
{
public function index() {  
        $marca =\App\marca::All();
        
                 
        return view('marcas.index',compact('marca'));       
    }

     public function create() {
        
      
        return view('marcas.create');   
        //return view('productos.create',compact('marca'));   
    }

    //y el estore es para guardar los del create
    public function store(marcaRequest $request) { 
        //
    \App\marca::create([
            //modelo                //la vista create
            'nomMarca' => $request['nomMarca'],  
                  
        ]);
           \App\Bitacora::bitacora("Registro de nueva Marca: ".$request['nomMarca']);
     //adonde vamos
        return redirect('marca')->with('message','create');
    }
     

 public function show($id)
    {
        //
        $pro2 =\App\producto::mostrar($id);
        return view('producto.index',compact('pro2'));
       
    }

     public function update(marcaRequest $request, $id)
    {
        $trab = \App\marca::find($id);
        
        $trab->nomMarca = $request['nomMarca'];
        $trab->save();
    \App\Bitacora::bitacora("Modificacion de Marca: ".$request['nomMarca']);
    return redirect('/marca');
    }
}
