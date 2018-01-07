<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\referencia;

class ClienteController extends Controller
{
    //el create es´para levantar el formulario
    public function create() {
    
        return view('clientes.create');  
    }
   
    //y el estore es para guardar los del create
    public function store(request $request) { 
        //
     cliente::create([
            //modelo                //la vista create
            'nomCliente' => $request['nombre'],
            'dui' => $request['dui'],
            'telCliente' => $request['telefono'],
            'nit' => $request['nit'], 
            'ingreso' => $request['email'],
            'dirCliente' => $request['direccion'],
           // 'estCliente' => $request['dirProveedor'],           
        ]);
     //adonde vamos
        return redirect('cliente')->with('message','create');
    }


    public function index() {  
        $cliente= cliente::All();
        $referencia= referencia::All();
                 
        return view('clientes.index',compact('cliente','referencia'));      
    }

      public function update(Request $request, $id)  //los recues llevan toda la info de form
    {
        $cli =\App\cliente::find($id);
        $aux=$request['opcModificar'];
       
        if($aux=='1')
        {
        $cli->nomCliente = $request['nomcliente'];
         $cli->telCliente = $request['telcliente'];
       $cli->ingreso = $request['Emailcliente'];
        $cli->dirCliente= $request['dircliente'];
       
        //$cli->sueldoEmp = $request['salario'];
        //$cli->cargoEmp = $request['cargo'];
        
        
        //$cli->sexEmp = $request['sexo'];correoEmp
        //$cli->contraEmp = $request['desc'];
        }

        if($aux=='2')
        {
            $cli->estCliente =false;
        }
        if($aux=='3')
        {
            $cli->estCliente =true;
        }


        $cli->save();
        


    return redirect('/cliente');
    }

     public function show($id)
    {
        $Aux=$id;
        $referencia= referencia::find($id);
        //$aux11= \App\listaDeCompra::auxComp($id);
        return view('clientes.referencia',compact('Aux','referencia'));
    }
         public function vistaClienteReporte() {
        $cliente= cliente::All();
    
        return view('clientes.vistaReporte',compact('cliente'));  
    }



    public function reporte2(request $request)
    {
        $idPro = $request['idMarca'];
        $clientes = cliente::sacarReferenciasXcliente($idPro);
       
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.clienteConRef";
      $view =  \View::make($vistaurl, compact('clientes', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Clientes '.$date.'.pdf');
    
    }


     public function reporte(request $request)
    {
       
       
        $clientes= cliente::All();
        
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.clientes";
      $view =  \View::make($vistaurl, compact('clientes', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Clientes '.$date.'.pdf');
    }
}
