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
          <h3 class="page-header"><i class="fa fa-user "></i>  ver clientes</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            
            <li><i class="fa fa-pencil-square-o"></i><a href="/sicicza/public/cliveedor/create">Regitrar cliente</a></li>
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
                  <th style="color: black">Acción</th>
                  <th style="color: black">Acción2</th>
                 
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


                  <td> <a href="#"   class="btn btn-info" align=" center" data-id="1" data-toggle="modal" data-target ="#Edit1{{ $cli->id }}">modificar</a></td>

                   @if($cli->estCliente==false)
                   {!!Form::open(['route'=>['referencia.index',$cli->id],'method'=>'GET'])!!}
                     
                                      <td> <input type="submit" name="" value=">Ver Referencia"   class="btn btn-warning" ></td>
                       
                    @endif

                   @if($cli->estCliente==true)
                     {!!Form::open(['route'=>['cliente.show',$cli->id],'method'=>'GET'])!!}
                     
                                      <td> <input type="submit" name="" value="Agg Referencia"   class="btn btn-success " ></td>
                    @endif

             
                 
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

<!--inicio modal modificar cliveedor-->
@foreach($cliente as $clive) 
<div id="Edit1{{ $clive->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:ligth">> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="col-md-2  text-center" style="color:;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                <h4 class="modal-title" id="gridModalLabel" style="background: mediumaquamarine ;color:black" >modificar datos cliente</h4>
            </div>
            <div class="modal-body" style="color:black">
                <div class="container-fluid bd-example-row" style="background:silver">
                    

                        {!!Form::model($clive,['method'=>'PATCH','route'=>['cliente.update',$clive->id]])!!}
                       
                        <fieldset>
                         <input type="hidden" name="opcModificar" value="1">

                       
                            
                            <br>
                            <div class="form-group ">
                                <!--<span class="col-md-2  text-center" ><label >Actividad: </label></span>-->
                                 <div >
                                          
                                            <div class="col-md-2  col-lg-2 col-md-offset-1" > <td><b>Nombre:</b></div>
                                            <div class="col-md-3 col-lg-9" >
                                            <input type="text" id="cname" name="nomcliente" class="textbox"  placeholder="" value="{{ $clive->nomCliente }}" required="">
                                            </div>

                                             <br>  <br>  
                                           
                                     <div class="col-md-2 col-lg-2 col-md-offset-1"> <td><b>Telèfono:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="text" class="textbox" id="cname" name="telcliente" placeholder="" value="{{ $clive->telCliente }}" required="" >
                                       </div>

                                        <br><br>

                                        <div class="col-md-2 col-lg-2 col-md-offset-1"> <td><b>Ingreso:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                     
                                     
                                            
                                            <input type="text" id="cemail" name="Emailcliente" class="textbox" placeholder="" value="{{ $clive->ingreso }}" required="" >    

                                            </div>  
                                           
                                                <br><br> 
                                       <div class="col-md-2 col-lg-2 col-md-offset-1"> <td><b>Direcciòn:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="text" id="ccoment" name="dircliente" class="textbox" placeholder="" value="{{ $clive->dirCliente}}" required="">
                                         </div>
                                       </div>
                               
                            </div> 
                            <br>
                            <br>
                                       
                                  
                        </fieldset>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


@foreach ($cliente as $cli)
 <div id="Edit2{{$cli->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3">DESACTIVAR CLIENTE ?</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          {!!Form::model($cli,['method'=>'PATCH','route'=>['cliente.update',$cli->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del cliveedor?</label>
              <input type="hidden" name="hi" value="{{ $cli->estCliente }}">
              <input type="hidden" name="opcModificar" value="2">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
          {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach()

@foreach ($cliente as $cli2)
<div id="Edit3{{$cli2->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning" bgcolor="blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3" >ACTIVAR CLIENTE</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
           {!!Form::model($cli2,['method'=>'PATCH','route'=>['cliente.update',$cli2->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del cliveedor?</label>
              <input type="hidden" name="hi" value="{{ $cli2->estCliente }}">
              <input type="hidden" name="opcModificar" value="3">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
          {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach ()




<div id="Edit4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning" bgcolor="blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3" >Referecia Agregada</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
           {!!Form::model($cli2,['method'=>'PATCH','route'=>['cliente.update',$cli2->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del cliveedor?</label>
              <input type="hidden" name="hi" value="{{ $cli2->estCliente }}">
              <input type="hidden" name="opcModificar" value="3">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
          {!!Form::close()!!}
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