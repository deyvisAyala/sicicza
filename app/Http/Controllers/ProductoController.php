<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
public function index() {  
        $producto =\App\producto::proPro();
        //$pro =\App\producto::proPro();
        $proveedor =\App\proveedor::All();
        $marca =\App\marca::All();
        return view('productos.index',compact('producto','pro2','marca'),compact('proveedor'));       
    }

     public function create() {
        $proveedor =\App\proveedor::All();
        $marca =\App\marca::All();
      
        return view('productos.create',compact('proveedor','marca'));   
        //return view('productos.create',compact('marca'));   
    }

    //y el estore es para guardar los del create
    public function store(request $request) { 
        //
    \App\producto::create([
            //modelo                //la vista create
            'nomProducto' => $request['nomProducto'],  
            'catProducto' => $request['catProducto'],
            'preProducto' => $request['preProducto'], 
            'idProveedor' => $request['idProveedor'], 
            'idMarca' => $request['idMarca'],  
            'stock' => $request['stock'],         
        ]);
     //adonde vamos
        return redirect('producto')->with('message','create');
    }
     

 public function show($id)
    {
        //
        $pro2 =\App\producto::mostrar($id);
        return view('producto.index',compact('pro2'));
       
    }

     public function update(Request $request, $id)
    {
        $trab = \App\producto::find($id);
        $aux=$request['hi2'];
       
        if($aux=='1')
        {
        $trab->nomProducto = $request['nomProducto'];
         $trab->preProducto = $request['preProducto'];
       $trab->catProducto = $request['catProducto'];
        $trab->idMarca= $request['idMarca'];
       
        //$trab->sueldoEmp = $request['salario'];
        //$trab->cargoEmp = $request['cargo'];
        
        
        //$trab->sexEmp = $request['sexo'];correoEmp
        //$trab->contraEmp = $request['desc'];
        }

        if($aux=='2')
        {
            $trab->estProducto =false;
        }
        if($aux=='3')
        {
            $trab->estProducto=true;
        }


        $trab->save();
        


    return redirect('/producto');
    }
}


