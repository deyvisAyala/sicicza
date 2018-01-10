<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;
use App\producto;
use App\facturaCompra;
use App\detallesCompra;
use App\listaDeCompra;
use App\marca;
use App\Http\Requests\facturaCompraRequest;
class createCompraController extends Controller
{
    



    //
     public function create() {
        //$aux11= \App\listaDeCompra::All();
    	$Vproveedor= proveedor::All();
      
    	//return view('compras.create',compact('proveedor','aux11'));	
        //return view('productos.create',compact('marca'));   */
        return view('compras.proveedores',compact('Vproveedor'));

    }

    //y el estore es para guardar los del create
    public function store(facturaCompraRequest $request) { 
    	//
    facturaCompra::create([
     		//modelo     			//la vista create
            'tipopago' => $request['des'],  
            'montocompra' => $request['monto'],
            'fechacompra' => $request['fecha'], 
            'nfactura' => $request['nfactura'], 
                     
        ]);
    
        $gAux =facturaCompra::All();
        foreach ($gAux as $fac) {
            $ids=$fac->id;
        }

         $gAux =\App\listaDeCompra::auxComp($request['idProveedor']);//auxiliar
        foreach ($gAux as $valor) 
        {
            detallesCompra::create([
                'preciocomp' => $valor->preciocomp2,
                'descompra' => $valor->descompra2,
                'cancompra' => $valor->cancompra2,
                'idprods' => $valor->idprods2,
                'idcomps' => $ids,

            ]);

        }

        foreach ($gAux as $v) {   //App el metodo costo promedio
                 
                 $pro=  producto::find($v->idprods2 );

                 $comTot=$v->preciocomp2 * $v->cancompra2;
                 $comReg=$pro->cPromedio*$pro->existencia;
                 $cosTot=$comTot+$comReg;
                 $exiTot=$pro->existencia+$v->cancompra2;
                 $pro->cPromedio=$cosTot/$exiTot;
                 $pro->existencia=$exiTot;

                 $pro->save();
                            
        }

         
        foreach ($gAux as $v) {
                 
                   
                  $auxeliminar= listaDeCompra::find( $v->id ); //busqueda por id
                    //$auxeliminar=$v;
                  $auxeliminar->delete();               
        }
     //adonde vamos
        return redirect('compras')->with('message','create');
    }



     public function index() {  
       // $producto= producto::All();
            $compras= facturaCompra::All();     
        return view('compras.index',compact('compras'));    	
    }
    public function show($id)
    {
        $producto= producto::mostrarxProveedor($id); 
        $proveedor= proveedor::All();
        $aux11= \App\listaDeCompra::auxComp($id);
        return view('compras.create',compact('producto','aux11'));
    }


    public function create2() {
        //$aux11= \App\listaDeCompra::All();
        $Vproveedor= proveedor::All();
      
        //return view('compras.create',compact('proveedor','aux11'));   
        //return view('productos.create',compact('marca'));   */
        return view('compras.filtroReporte',compact('Vproveedor'));

    }


 public function reporte(request $request)
    {
        $finicio = $request['fechaInicial'];
        $ffinal = $request['fechaFinal'];
        $compra= \App\facturaCompra::sacarComprasPorFecha($finicio,$ffinal);
       
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.compras";
      $view =  \View::make($vistaurl, compact('compra', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Compras '.$date.'.pdf');
    }



     public function reporte2(request $request)
    {
        $idPro = $request['idMarca'];
       
        $compra= \App\facturaCompra::sacarComprasXproveedor($idPro);
       
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

      $vistaurl="reportes.compraProve";
      $view =  \View::make($vistaurl, compact('compra', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Compras '.$date.'.pdf');
    }

}
