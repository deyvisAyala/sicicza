<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class creditosController extends Controller
{
    //
    public function index()
    {
        //
        $cliente=\App\cliente::All();
   
         return view('creditos.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
         $pago = \App\pago::pagosXCliente2($id,true);

        return view('creditos.verCreditos',compact('pago'));
    }
     public function historial($id)
    {
          
         $pago = \App\pago::pagosXCliente2($id,false);
        return view('creditos.verHistorial',compact('pago'));
    }
    public function pagarCredito($id)
    {
       
        $pago=\App\pago::find($id);
        $cli = \App\facturaVenta2::find($pago->idfactura);

        $cli2=\App\cliente::find($cli->idcliente); 
        
        $cuotas=\App\cuota::where('idpago',$id)->get();
        return view('creditos.verCuotas',compact('cuotas','cli2','pago'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pago=\App\pago::find($id);
        $cuotas=\App\cuota::where('idpago',$id)->get();
        return view('creditos.verDetalle',compact('cuotas','pago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $comp2 =\App\cuota::where('idpago',$id)->get();

          $cuota=\App\pago::find($id);
          $cli = \App\facturaVenta2::find($cuota->idfactura);
        $cli2=\App\cliente::find($cli->idcliente);  
        $cliente=\App\cliente::All(); 
        
        $ids=count($comp2);
        if($ids==$cuota->cuotas)
        {
              return view('creditos.index',compact('cliente')); 
        }
        else{

        //
        \App\cuota::create([
             'monto'=>$request['monto'],  
             'fecha'=>$request['fecha'],
             'mora'=>$request['mora'],
             'total'=>$request['total'],
             'idpago'=>$id,
            ]);

        $comp2 =\App\cuota::where('idpago',$id)->get();
        
        $ids=count($comp2);
        
        $cuota=\App\pago::find($id);
        if($ids==$cuota->cuotas)
        {
            $cuota->estado=false;
            $cuota->pendiente=0;
            $cuota->fecPago=$request['fecha'];
            $cuota->save();
            //$cli =\App\cliente::find($cuota->);
            
        }
        else{
            $dt=$cuota->fecPago;
            $cuota->fecPago=date("Y-m-d", strtotime("$dt +1 month"));
            $cuota->pendiente=$cuota->pendiente-$cuota->monto;
            $cuota->save();

        }

  

      $cuota= \App\cuota::All();
      
       foreach ($cuota as $c) {
           $cuo=$c;
          
       }
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        $con = $request['con'];
        $cuo->fecha=date("d-m-Y", strtotime("$cuo->fecha"));

//dd($con);
      $vistaurl="reportes.ticked";
      $view =  \View::make($vistaurl, compact('cuo','con','cli2', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Ticked '.$date.'.pdf');
 }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
