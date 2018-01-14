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
          <h3 class="page-header"><i class="fa fa-truck "></i>  lista de proveedores</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-truck"></i>proveedores</li>
            <li><i class="fa fa-pencil-square-o"></i>Ver proveedores</li>
          </ol>
        </div>
      </div>
  <div class="">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5><b>Tabla de proveedores<b></h5>
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
                  <th style="color: black">Teléfono</th>
                  <th style="color: black">E-Mail</th>
                  <th style="color: black">Dirección</th>
                  <th style="color: black">Acción</th>
                  <th style="color: black">Acción2</th>
                </tr>
              </thead>
              <tbody class="buscar">
                @foreach($proveedor as $pro) 
                <tr class="gradeX">
                
                  <td>{{ $pro->id}}</td>
                  <td>{{ $pro->nomProveedor}}</td>
                  <td>{{ $pro->telProveedor}}</td>
                  <td>{{ $pro->EmailProveedor}}</td>

                  <td class="center">{{ $pro->dirProveedor}}</td>
                  <td> <a href="#"   class="btn btn-info" align=" center" data-id="1" data-toggle="modal" data-target ="#Edit1{{ $pro->id }}">modificar</a></td>
                   @if($pro->estProveedor==false)
                   <td> <a href="#"   class="btn btn-warning" data-id="1" data-toggle="modal" data-target="#Edit3{{ $pro->id }}">Desactivo</a></td>
                    @endif

                   @if($pro->estProveedor==true)
                    <td> <a href="#"   class="btn btn-danger" data-id="1" data-toggle="modal" data-target="#Edit2{{ $pro->id }}">Activo</a></td>
                    @endif
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

<!--inicio modal modificar proveedor-->
@foreach($proveedor as $prove) 
<div id="Edit1{{ $prove->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:ligth">> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="col-md-2  text-center" style="color:;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                <h4 class="modal-title" id="gridModalLabel" style="background: mediumaquamarine ;color:black" >modificar datos proveedor</h4>
            </div>
            <div class="modal-body" style="color:black">
                <div class="container-fluid bd-example-row" style="background:silver">
                    

                        {!!Form::model($prove,['method'=>'PATCH','route'=>['proveedor.update',$prove->id]])!!}
                       
                        <fieldset>
                         <input type="hidden" name="hi2" value="1">

                       
                            
                            <br>
                            <div class="form-group ">
                                <!--<span class="col-md-2  text-center" ><label >Actividad: </label></span>-->
                                 <div >
                                          
                                            <div class="col-md-2  col-lg-2 col-md-offset-1" > <td><b>Nombre:</b></div>
                                            <div class="col-md-3 col-lg-9" >
                                            <input type="text" id="cname" name="nomProveedor" class="textbox"  placeholder="" value="{{ $prove->nomProveedor }}" required="">
                                            </div>

                                             <br>  <br>  
                                           
                                     <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>Telèfono:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="text" class="textbox" id="cname" name="telProveedor" placeholder="" value="{{ $prove->telProveedor }}" required="" >
                                       </div>

                                        <br><br>

                                        <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>Correo:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                     
                                     
                                            
                                            <input type="text" id="cemail" name="EmailProveedor" class="textbox" placeholder="" value="{{ $prove->EmailProveedor }}" required="" >    

                                            </div>  
                                           
                                                <br><br> 
                                       <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>Direcciòn:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="text" id="ccoment" name="dirProveedor" class="textbox" placeholder="" value="{{ $prove->dirProveedor}}" required="">
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


@foreach ($proveedor as $pro)
 <div id="Edit2{{$pro->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3">DESACTIVAR PROVEEDOR</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          {!!Form::model($pro,['method'=>'PATCH','route'=>['proveedor.update',$pro->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del proveedor?</label>
              <input type="hidden" name="hi" value="{{ $pro->estProveedor }}">
              <input type="hidden" name="hi2" value="2">
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

@foreach ($proveedor as $pro2)
<div id="Edit3{{$pro2->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning" bgcolor="blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3" >ACTIVAR PROVEEDOR</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
           {!!Form::model($pro2,['method'=>'PATCH','route'=>['proveedor.update',$pro2->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del proveedor?</label>
              <input type="hidden" name="hi" value="{{ $pro2->estProveedor }}">
              <input type="hidden" name="hi2" value="3">
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
</section>
<div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            
            <a> <img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" >  copyright</a> UES FMP <a >2017</a><img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" > 
        </div>
    </div>
@endsection


@section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    
{!!Html::script('js/buscaresc.js')!!} 





  @endsection