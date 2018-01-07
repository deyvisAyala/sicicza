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
                  <th style="color: black">Cliente</th>
                  <th style="color: black">Familiar</th>
                  <th style="color: black">Telefono</th>
                  <th style="color: black">Direccion</th>
                  <th style="color: black">Amistad </th>
                  <th style="color: black">Telefono</th>
                  <th style="color: black">Dirección</th>
                  <th style="color: black">Acción</th>
                  
                </tr>
              </thead>
              <tbody class="buscar">
                @foreach($referencias as $cli) 
                <tr class="gradeX">

                  <?php
                    $ref=DB::select(DB::raw("SELECT * FROM clientes WHERE id='$cli->idCliente' "));

                    //dd($ref);
                    ?>
                @foreach ($ref as $a) 
               
                  <td>{{ $cli->id}}</td>
                  <td>{{ $a->nomCliente}}</td>
                  <td>{{ $cli->nomFamiliar}}</td>
                  <td>{{ $cli->telFamiliar}}</td>
                  <td>{{ $cli->telFamiliar}}</td>
                  <td>{{ $cli->nomPersonal}}</td>
                  <td>{{ $cli->telPersonal}}</td>
                  <td>{{ $cli->dirPersonal}}</td>
                  


                  <td> <a href="#"   class="btn btn-info" align=" center" data-id="1" data-toggle="modal" data-target ="#Edit1{{ $cli->id }}">modificar</a></td>

                  
                </tr>
                </tr>
                @endforeach
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
@foreach($referencias as $clive) 
<div id="Edit1{{ $clive->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:ligth">> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="col-md-2  text-center" style="color:;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                <h4 class="modal-title" id="gridModalLabel" style="background: mediumaquamarine ;color:black" >modificar datos Referencia</h4>
            </div>
            <div class="modal-body" style="color:black">
                <div class="container-fluid bd-example-row" style="background:silver">
                    

                        {!!Form::model($clive,['method'=>'PATCH','route'=>['referencia.update',$clive->id]])!!}
                       
                        <div class="">
                                  <div class="row">
                                 
<b5> <h3>&nbsp &nbsp &nbsp &nbsp &nbspReferencia Familiar:  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  Referencia Personal:</h3>  </b5>
                                      
                                
                                  <div class="col-md-6">
                                    
                                    <div class="col-md-12">
                                      <div class=" col-md-12 col-md-offset-12 col-lg-12" ><td><b>Nombre:</b></div>
                                      <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                        
                                         <input id="nombre1" name="nombre1" type="text" placeholder="Ingrese nombre de la referencia familiar" class="form-control " value="{{ $clive->nomFamiliar }}"required >
                                      </div>
                                    </div>
                                    <br>          
                                    <div class="col-md-12">
                                     <div class=" col-md-12 col-md-offset-0 col-lg-12" ><td><b>Telefono:</b></div>
                               <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                
                                 <input id="telefono1" name="telefono1" type="text" placeholder="Ej. 7777-7777" class="form-control " value="{{ $clive->telFamiliar }}"required >
                                  </div>
                                    </div>

                                    <br>
                                    <div class="col-md-12">
                                      <div class=" col-md-12 col-md-offset-12 col-lg-12" ><td><b>Direccion:</b></div>
                                      <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                       
                                         <input id="direccion1" name="direccion1" type="text" placeholder="Ingrese nombre del cliente" class="form-control " value="{{ $clive->dirFamiliar }}" required >
                                      </div>
                                    </div>

                                  </div>


                                    
                                  <div class="col-md-6">
                                   <div class="col-md-12">
                                      <div class=" col-md-12 col-md-offset-12 col-lg-12" ><td><b>Nombre:</b></div>
                                      <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                        
                                         <input id="nombre2" name="nombre2" type="text" placeholder="Ingrese nombre de la referencia familiar" class="form-control " value="{{ $clive->nomPersonal }}" required >
                                      </div>
                                    </div>
                                    <br>          
                                    <div class="col-md-12">
                                     <div class=" col-md-12 col-md-offset-0 col-lg-12" ><td><b>Telefono:</b></div>
                               <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                              
                                 <input id="telefono2" name="telefono2" type="text" placeholder="Dui. Ej:77777777-7" class="form-control " value="{{ $clive->telPersonal }}" required >
                                  </div>
                                    </div>

                                    <br>
                                    <div class="col-md-12">
                                      <div class=" col-md-12 col-md-offset-12 col-lg-12" ><td><b>Direccion:</b></div>
                                      <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                       
                                         <input id="direccion2" name="direccion2" type="text" placeholder="Ingrese nombre del cliente" class="form-control " value="{{ $clive->dirPersonal }}" required >
                                      </div>
                                    </div>
                                  </div>

          

                              </div>

                              <br><br>

                               <div class="form-group">
                                          <div class="col-md-12 text-center" align="center">
                                              <button class="btn btn-primary" type="submit">Guardar</button>
                                              
                                              {!! Form::reset('Limpiar',['class'=>'btn btn-danger' ]) !!}
                                          </div>
                                      </div>
                  
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach



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