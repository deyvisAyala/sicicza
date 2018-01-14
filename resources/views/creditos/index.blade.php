@extends('welcome')
@section('contenido')
<?php $message=Session::get('message');?>
<section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc" >
        <div class="col-lg-12">
        @if($message=='update')
          <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong> •Sea actualizado con éxito el registro</strong>
</div>
@endif
@if($message=='create')
        <div class="alert alert-success alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong> •Sea creado con éxito el registro</strong>
        </div>
        @endif
          <h3 class="page-header"><i class="fa fa-user "></i>  Ver Creditos</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            
            <li><i class="fa fa-pencil-square-o"></i>creditos</li>
          </ol>
        </div>
      </div>
  <div class="">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5><b>Tabla de datos<b></h5>
          </div>
          <div class="form-group" align="right">
                              <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                              <div class="col-xs-4">
                                <input id="filtrar" name="name" type="text" class="form-control">
                              </div>
                            </div>
                            <br><br>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-advance table-hover table-striped data-table"  style="background-color: #c8daea "  >
              <thead style="background-color: SteelBlue">
                <tr>
                  <th style="color: black">#</th>
                  <th style="color: black">Nombre</th>
                  <th style="color: black">Dui</th>
                  <th style="color: black">Teléfono</th>
                  <th style="color: black">Nit</th>
                  <th style="color: black">Ingresos</th>
                  <th style="color: black">Dirección</th>
                  <th style="color: black" colspan="2"><div align="center">Acción</div></th>
                 
                 
                </tr>
              </thead>
              <tbody class="buscar">
                @foreach($cliente as $cli) 
                <tr class="gradeX">
                
                  <td>{{ $cli->id}}</td>
                  <td>{{ $cli->nomCliente}}</td>
                  <td>{{ $cli->dui}}</td>
                  <td>{{ $cli->telCliente}}</td>
                  <td>{{ $cli->nit}}</td>
                  <td>{{ $cli->ingreso}}</td>
                  <td>{{ $cli->dirCliente}}</td>
                  <td>
                  {!!Form::open(['route'=>['creditos.show',$cli->id],'method'=>'GET'])!!}
                     <input type="submit" name="" value="Creditos"   class="btn btn-info" >
                  {!!Form::close()!!}   

                  </td>

                  <td>
                  
                  <a class="btn btn-success" href="/sicicza/public/creditosHistorial/{{ $cli->id }}">Historial</a>
               
                   
                 </td>
        
                 

             
                 
               {!!Form::close()!!}
                </tr>
                </tr>
                @endforeach

                
              </tbody>
            </table>
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>


                </div>
            </div>
        </div>
    </div>
</div>








        </div>
      </div>
      
    </div>
  </div>
</div>
</section>
<div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the cli version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the cli version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            
            <a> <img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" >  copyright</a> UES FMP <a >2017</a><img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" > 
        </div>
    </div>
@endsection


@section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    
{!!Html::script('js/buscaresc.js')!!} 





  @endsection