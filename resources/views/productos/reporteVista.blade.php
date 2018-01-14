@extends('welcome')
@section('contenido')



 <section id="main-content">

          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc" >
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-truck "></i> Reporte Venta</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-eye"></i>Reportes</li>
            
          </ol>
        </div>
      </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              REPORTE DE INVENTARIO TOTAL
                          </header>

                          <div class="panel-body">
                              <div class="form">
                                  
                                 {!! Form::open(['url'=>['reporteInventario2'],'method'=>'POST','target'=>'_blank']) !!}
                                     <br>
                              {!! Form::submit('Generar Informe',['class'=>'btn btn-info']) !!}  </form>


                          </div>

                      </section>
                  </div>
              </div>
               <!-- *****************************    segundo    formulario    **************************-->
              
             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              REPORTE DE INVENTARIO EXISTENCIAS
                          </header>

                          <div class="panel-body">
                              <div class="form">
                                  
                                 {!! Form::open(['url'=>['existencias'],'method'=>'POST','target'=>'_blank']) !!}
                                     <br>
                              {!! Form::submit('Generar Informe',['class'=>'btn btn-info']) !!}  </form>


                          </div>

                      </section>
                  </div>
              </div>

               <!-- *****************************    TERCER    formulario    **************************-->
               <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              REPORTE DE INVENTARIO NO EN EXISTENCIAS
                          </header>

                          <div class="panel-body">
                              <div class="form">
                                  
                                 {!! Form::open(['url'=>['NoExistencias'],'method'=>'POST','target'=>'_blank']) !!}
                                     <br>
                              {!! Form::submit('Generar Informe',['class'=>'btn btn-info']) !!}  </form>


                          </div>

                      </section>
                  </div>
              </div>
              <!-- page end-->
              
          </section>

      </section>
      <div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            
            <a > <img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" >  copyright</a> UES FMP <a >2017</a><img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" > 
        </div>
    </div>

@endsection
<?php 
$time=time();
    
    function dameFecha($fecha,$dia){
        list($year,$mon,$day)=explode('-',$fecha);
        return date('Y-m-d',mktime(0,0,0,$mon,$day+$dia,$year));    
    }
   $total=0;   
?>