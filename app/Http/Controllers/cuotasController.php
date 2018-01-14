<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cuotasController extends Controller
{
    //



	 public function vistaTicked()
    {
        
       $cuota= \App\cuota::All();
      
       foreach ($cuota as $c) {
           $cuo=$c;
          
       }
        $date = date('d-m-Y');
        $date1 = date('g:i:s a');
        

//dd($con);
      $vistaurl="reportes.ticked";
      $view =  \View::make($vistaurl, compact('cuo','num', 'date','date1'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
     return $pdf->stream('Reporte Compras '.$date.'.pdf');
    }  
}
