<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;

class ProveedorController extends Controller
{
    //el create es´para levantar el formulario
     public function create() {
    
        return view('proveedores.create');  
    }

    //y el estore es para guardar los del create
    public function store(request $request) { 
        //
     proveedor::create([
            //modelo                //la vista create
            'nomProveedor' => $request['nomProveedor'],
            'telProveedor' => $request['telProveedor'],
            'EmailProveedor' => $request['EmailProveedor'],
            'dirProveedor' => $request['dirProveedor'],            
        ]);
     //adonde vamos
        return redirect('proveedor')->with('message','create');
    }
     public function index() {  
        $proveedor= proveedor::All();
                 
        return view('proveedores.index',compact('proveedor'));      
    }

     public function update(Request $request, $id)  //los recues llevan toda la info de form
    {
        $trab = \App\proveedor::find($id);
        $aux=$request['hi2'];
       
        if($aux=='1')
        {
        $trab->nomProveedor = $request['nomProveedor'];
         $trab->telProveedor = $request['telProveedor'];
       $trab->EmailProveedor = $request['EmailProveedor'];
        $trab->dirProveedor= $request['dirProveedor'];
       
        //$trab->sueldoEmp = $request['salario'];
        //$trab->cargoEmp = $request['cargo'];
        
        
        //$trab->sexEmp = $request['sexo'];correoEmp
        //$trab->contraEmp = $request['desc'];
        }

        if($aux=='2')
        {
            $trab->estProveedor =false;
        }
        if($aux=='3')
        {
            $trab->estProveedor =true;
        }


        $trab->save();
        


    return redirect('/proveedor');
    }

   public function reporte()
    {

        $pro = proveedor::all();
       
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.proveedores";
      $view =  \View::make($vistaurl, compact('pro', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Proveedores '.$date.'.pdf');
    }
}


