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
            'catProducto' => $request['catProducto'],//DESCRIPCION DEL PRODUCTO
            'preProducto' => $request['preProducto'], 
            'idProveedor' => $request['idProveedor'], 
            'idMarca' => $request['idMarca'],  
            'stock' => $request['stock'],         
        ]);
     //adonde vamos
        return redirect('producto')->with('message','create');
    }
     

 /*public function show($id)
    {
        //
        $pro2 =\App\producto::mostrar($id);
        return view('producto.index',compact('pro2'));
       
    }*/
     public function stock()
    {
        //
        $productos =\App\producto::proPro();
        return view('productos.alertaStock',compact('productos'));
       
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

    public function listaProductos() {  
        $producto =\App\producto::proPro();
        //$pro =\App\producto::proPro();
        $proveedor =\App\proveedor::All();
        $marca =\App\marca::All();
        return view('productos.kardex',compact('producto','pro2','marca'),compact('proveedor'));       
    }

    public function show($id)
    {
        //
         $producto = productos::find($id);
        

         $comp=\App\detalles_compras::sacarComprasPorProductos($id);
         $comp2=\App\detalle_ventas::sacarVentasPorProductos($id);
         

        // $com=\App\compras::pro2($comp->id);
        return view('inventario.kardex',compact('lotes','pro','comp','comp2')); 
    }

    //////////////////////ESPACIO PARA LLAMADO Y CONSULTA DE REPORTES/////////////////////////////////

            public function vistaVentasReporte() {
        //$aux11= \App\listaDeCompra::All();
       
        //return view('compras.create',compact('proveedor','aux11'));   
        //return view('productos.create',compact('marca'));   */
        return view('productos.reporteVista');

    }


 public function reporteInven(request $request)
    {
       
        $productos= \App\producto::sacarProductosActivos();
       
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.reporteInventario";
      $view =  \View::make($vistaurl, compact('productos', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Inventario '.$date.'.pdf');
    }



   public function listaExsistencias(request $request)
    {
        $productos= \App\producto::sacarProductosEnExisencia();
    
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.reporteINventarioExsistencia";
      $view =  \View::make($vistaurl, compact('productos', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Inventario Existencias '.$date.'.pdf');
    }              

    public function listaNoExsistencias(request $request)
    {
        $productos= \App\producto::sacarProductosNoEnExisencia();
    
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.reporteINventarioExsistencia";
      $view =  \View::make($vistaurl, compact('productos', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Inventario Existencias '.$date.'.pdf');
    }          
}



