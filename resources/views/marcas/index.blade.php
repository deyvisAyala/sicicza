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
					<h3 class="page-header"><i class="icon_document_alt"></i>  lista de Marcas</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
						<li><i class="fa fa-file-text"></i>Marcas</li>
						<li><i class="fa fa-pencil-square-o"></i>Ver marcas</li>
					</ol>
				</div>
			</div>
  <div class="">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Tabla de marcas</h5>
          </div>
          <div class="form-group" align="right">
                              <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                              <div class="col-xs-4">
                                <input id="filtrar" name="name" type="text" class="form-control">
                              </div>
          </div>
<br><br>
          <div class="widget-content nopadding">
           <table class="table table-bordered table-advance table-hover table-striped data-table"  style="background-color: #c8daea">
              <thead style="background-color: SteelBlue ">
                <tr>
                  <th style="color: black">Código</th>
              
                  <th style="color: black">Marca</th>
                  
                 
                  <th style="color: black">Acción</th>
                  
                </tr>
              </thead>
              <tbody class="buscar">
              	@foreach($marca as $pro) 
                <tr class="gradeX">
                
                  <td>{{ $pro->id}}</td>
                  <td>{{ $pro->nomMarca}}</td>
                 
                  
                  <td> <a href="#"   class="btn btn-info" data-id="1" data-toggle="modal" data-target="#Edit1{{ $pro->id }}">modificar</a></td>

                   
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
        <a href="index.html" class="btn btn-danger" align="left">Guardar</a>
        <a href="#" data-dismiss="modal" class="btn" align="center">Cerrar</a>
    </div>
</div>

   @foreach($marca as $pro1) 
<div id="Edit1{{ $pro1->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:ligth">> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="col-md-2  text-center" style="color:;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                <h4 class="modal-title" id="gridModalLabel" style="background: mediumaquamarine ;color:black" >modificar datos de la Marca</h4>
            </div>
            <div class="modal-body" style="color:black">
                <div class="container-fluid bd-example-row" style="background:silver">
                    

                        {!!Form::model($pro1,['method'=>'PATCH','route'=>['marca.update',$pro1->id]])!!}
                       
                        <fieldset>
                         <input type="hidden" name="hi2" value="1">

                       
                            
                            <br>
                            <div class="form-group ">
                                <!--<span class="col-md-2  text-center" ><label >Actividad: </label></span>-->
                                 <div >
                                          
                                            <div class="col-md-2  col-lg-2 col-md-offset-1" > <td><b>Marca:</b></div>
                                            <div class="col-md-3 col-lg-9" >
                                            <input type="text" id="nom" name="nomMarca" class="textbox"  placeholder="nombre de la marca" value="{{ $pro1->nomMarca }}" required="">
                                            </div>

                                             <br>  <br>  
                                           
                                     
                               
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
@section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    
{!!Html::script('js/buscaresc.js')!!} 



  @endsection