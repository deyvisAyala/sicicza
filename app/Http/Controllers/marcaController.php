<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store(request $request) { 
        //
    \App\marca::create([
            //modelo                //la vista create
            'nomMarca' => $request['nomMarca'],  
                  
        ]);
     //adonde vamos
        return redirect('marca')->with('message','create');
    }
     

 public function show($id)
    {
        //
        $pro2 =\App\producto::mostrar($id);
        return view('producto.index',compact('pro2'));
       
    }

     public function update(Request $request, $id)
    {
        $trab = \App\marca::find($id);
        
        $trab->nomMarca = $request['nomMarca'];
        $trab->save();
        


    return redirect('/marca');
    }
}
