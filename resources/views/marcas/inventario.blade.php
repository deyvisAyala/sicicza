@extends('welcome')
@section('contenido')
<?php $message=Session::get('message');?>
<section id="main-content">
          <section class="wrapper">
		  <div class="row" style="background-color: #b3cccc">
				<div class="col-lg-12">
				@if($message=='update')
					<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

</div>
@endif
@if($message=='create')
				<div class="alert alert-success alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong> •Sea creado con éxito el registro</strong>
				</div>
				@endif
					<h3 class="page-header"><i class="fa fa-truck "></i> inventario de Productos</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
						<li><i class="fa fa-truck"></i>inventario</li>
						<li><i class="fa fa-pencil-square-o"></i>registro de productos</li>
					</ol>
				</div>
			</div>
  <div class="">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Productos deisponibles</h5>
          </div>
          <div class="form-group" align="right">
                              <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                              <div class="col-xs-4">
                                <input id="filtrar" name="name" type="text" class="form-control">
                              </div>
          </div>
<br><br>
          <div class="widget-content nopadding">
             <table class="table table-bordered data-table"  style="background-color: #c8daea">
              <thead style="background-color: SteelBlue ">
                <tr>
                  <th style="color: black">codigo</th>
                  <th style="color: black">Nombre</th>
                  <th style="color: black">Marca</th>
                  <th style="color: black">costo promedio</th>
                  <th style="color: black">unidades disponibles</th>
                  <th style="color: black">precio de venta</th>
                  
                  <th style="color: black">descripciòn</th>
                  <th style="color: black">acciòn</th>
                 
                  
                </tr>
              </thead>
              <tbody class="buscar">
              	@foreach($producto as $pro) 
                <tr class="gradeX">
                
                  <td>{{ $pro->id}}</td>
                  <td>{{ $pro->nomProducto}}</td>
                 
                  <td>{{ $pro->catProducto}}</td>
<td>{{ $pro->idProveedor}}</td>
 <td>{{ $pro->idMarca}}<a>3</a></td>
                  <td class="center">{{ $pro->preProducto}}</td>
                  <td>{{ $pro->id}}</td>
                  
                  <td> <a  href="/sicicza/public/kardex"  class="btn btn-info" data-id="1"  data-target="#Edit1">kardex</a></td>
                 
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
<div id="example" class="modal hide fade in" style="display: none;">
    <div class="modal-header">
        <a data-dismiss="modal" class="close">×</a>
        <h3>Cabecera de la ventana</h3>
     </div>
     <div class="modal-body">
         <h4>Texto de la ventana</h4>
        <p>Mas texto en la ventana.</p>                
    </div>
    <div class="modal-footer">
        <a href="index.html" class="btn btn-primary" align="left">Guardar</a>
        <a href="#" data-dismiss="modal" class="btn" align="center">Cerrar</a>
    </div>
</div>
    <div id="Edit1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:white">> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="col-md-2  text-center" style="color:;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                <h4 class="modal-title" id="gridModalLabel" style="background: mediumaquamarine ;color:black" >modificar producto</h4>
            </div>
            <div class="modal-body" style="color:black">
                <div class="container-fluid bd-example-row" style="background:silver">
                 
                    <input type="hidden" name="bandera" value="2">
                        <fieldset>
                            
                            <br>
                            <div class="form-group">
                                <!--<span class="col-md-2  text-center" ><label >Actividad: </label></span>-->
                                 <div class="col-lg-3">
                                            <label>Codigo</label>
                                             <br>
                                            <input type="text" class="textbox" size="30" placeholder=""disabled >
                                             <br>
                                            <label>Nombre</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                             <br>
                                            <label>marca</label>
                                             <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                           <br>
                                     <label>ganancia</label>
                                             <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                           
                                                
                                      <label>descripciòn</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                    
                                        </div>
                                <div class="col-md-3">
                                   
                                </div>    
                            </div> 
                            <br>
                            <br>
                                       
                                  
                        </fieldset>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                         
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    
{!!Html::script('js/buscaresc.js')!!} 


  @endsection