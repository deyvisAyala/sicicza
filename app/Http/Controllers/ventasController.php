<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\ventasp;
use App\Http\Requests\facturaVentaRequest;
class ventasController extends Controller
{
     public function create() {
         $aux= \App\tempoventa::auxventa();
     	 $marca =\App\marca::All();
         $cliente =\App\cliente::All();
        //$aux11= \App\listaDeCompra::All();
    	//$Vproveedor= proveedor::All();
      
    	//return view('compras.create',compact('proveedor','aux11'));	
        //return view('productos.create',compact('marca'));   */
        return view('ventas.create',compact('marca','aux','cliente'));

    }
    public function index() {  
       
        $ventas =\App\facturaVenta2::All();
        return view('ventas.index',compact('ventas'));       
    }


    public function store(facturaVentaRequest $request)
    {
        //
                //$v="+"+1+" month";
         $dt=$request['fecha'];
        $dt =date("Y/m/d", strtotime("$dt +1 month"));
        $prima=($request['total']+$request['prima']);

        \App\facturaVenta2::create([
             
            'fechav' => $request['fecha'],
            'montov' => $prima,
            'idcliente' => $request['idcliente'],
            'numfactura' => $request['numfactura'],
            'descripcion' => $request['descripcion'],
            //'idempl' => $request['codE'],


        ]);
        $ids;
        $gAux =\App\facturaVenta2::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }

        $gAux =\App\tempoventa::All();

        foreach ($gAux as $valor) 
        {
           
            \App\detalleVenta::create([
                //'' => $valor->preciocomp3,
                'nomProducto'=>1,
                'preVenta' => $valor->precio,
                'cantidad' =>  $valor->cantidad,
                'idProducto' => $valor->idProducto,
                'idfactura' => $ids,

            ]);
          
    }


  $eAux =\App\tempoventa::All();
        foreach ($eAux as $v) {
                 
                   
                  $auxeliminar= \App\tempoventa::find( $v->id );
                  $auxeliminar->delete();               
        }


       

      $estado=$request['cuotas'];
                if($estado==0)
                {
                    \App\pago::create([
                //'' => $valor->preciocomp3,
                'fecPago' => $request['fecha'],
                'pendiente' => $request['total'],
                'monto' => 0,
                'mora' => 0,
                'cuotas' =>0,
                'idfactura' => $ids,
                
                'estado'=> false,


                

            ]);
                    $c=$request['idcliente'];
                    $cli=\App\cliente::find($c);
                    
                     return redirect('ventas/create')->with('message','stock');
                    
            }
            else{
                
                    \App\pago::create([
                //'' => $valor->preciocomp3,
                'fecPago' => $dt,
                'pendiente' => $request['formap']*$request['cuotas'],
                'monto' => $request['cuotas'],
                'mora' => 0,
                'cuotas' =>$request['formap'],
                'idfactura' => $ids,
                

            ]);

            }

        return redirect('ventas/create')->with('message','create');
    }




    public function buscarXMarca($id)
    {
        //
        $producto =\App\producto::mostrarxMarca($id);
        
       return Response::json($producto);
       
    }
    public function llenarXProducto($id)
    {
        //
        $prod =\App\producto::mostrarxProve($id);
       return Response::json($prod);
       
    }
  /*  public function capacidad($id)//verica la cantidad que se tiene en caja de los productos en unidades.
      {

        $cliente=\App\cliente::find($id);
        
        $cliente->ingreso=($cliente->ingreso-200);
        $pago = \App\pago::pagosXCliente($id);
        foreach ($pago as $value) {
           $cliente->ingreso=$cliente->ingreso-$value->monto;
        }
                
 
    return response()->json($cliente);
  }*/
    public function capacidad($id)//verica la cantidad que se tiene en caja de los productos en unidades.
      {

        $cliente=\App\cliente::where('dui',$id)->get();
        
        $cliente[0]->ingreso=($cliente[0]->ingreso-200);
        $pago = \App\pago::pagosXCliente($cliente[0]->id);
        foreach ($pago as $value) {
           $cliente[0]->ingreso=$cliente[0]->ingreso-$value->monto;
        }
                
 
    return response()->json($cliente[0]);
  }


  public function show($id)
    {
       
       $venta= \App\detalleVenta::sacarVentasPorFactura($id);
        return view('ventas.detalle',compact('venta'));
    }



//////////////////////ESPACIO PARA LLAMADO Y CONSULTA DE REPORTES/////////////////////////////////

        public function vistaVentasReporte() {
        //$aux11= \App\listaDeCompra::All();
       
        //return view('compras.create',compact('proveedor','aux11'));   
        //return view('productos.create',compact('marca'));   */
        return view('ventas.reporteVista');

    }


 public function reporteVentas(request $request)
    {
        $finicio = $request['fechaInicial'];
        $ffinal = $request['fechaFinal'];
        $ventas= \App\facturaVenta2::sacarVentasPorFecha($finicio,$ffinal);
       
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.reporteXfecha";
      $view =  \View::make($vistaurl, compact('ventas', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Ventas '.$date.'.pdf');
    }

    public function reporteCredito(request $request)
    {
        
        $creditos= \App\pagos::sacarCreditos();
       
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.creditos";
      $view =  \View::make($vistaurl, compact('creditos', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Ventas '.$date.'.pdf');
    }



    /* public function reporte2(request $request)
    {
        $idPro = $request['idMarca'];
       
        $ventas= \App\facturaCompra::sacarComprasXproveedor($idPro);
       
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.reporteXfecha";
      $view =  \View::make($vistaurl, compact('ventas', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Compras '.$date.'.pdf');
    } */             
    
}
