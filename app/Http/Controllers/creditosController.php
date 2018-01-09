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
        return view('creditos.verCreditos',compact('pago'));
    }
    public function pagarCredito($id)
    {
       
        $pago=\App\pago::find($id);
        $cuotas=\App\cuota::where('idpago',$id)->get();
        return view('creditos.verCuotas',compact('cuotas','pago'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            $cuota->save();
            //$cli =\App\cliente::find($cuota->);
            
        }
        else{
            $dt=$cuota->fecPago;
            $cuota->fecPago=date("Y-m-d", strtotime("$dt +1 month"));
            $cuota->pendiente=$cuota->pendiente-$cuota->monto;
            $cuota->save();

        }

            
         $ruta='creditos/'.$request['idProveedor'].'';
       return redirect($ruta);

       
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
