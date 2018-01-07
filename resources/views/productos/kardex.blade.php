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
        
        @endif
          <h3 class="page-header"><i class="fa fa-truck "></i> Kardex de producto:</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-truck"></i>inventario</li>
            <li><i class="fa fa-pencil-square-o"></i>registro de productos</li>
          </ol>
        </div>
      </div>
  <div class="">
    <div class="row-fluid">
      <div class="span12" >
        <div class="widget-box">
          
<br><br>
          <div class="widget-content nopadding" >
            <table class="table table-bordered data-table"  style="background-color: #c8daea">
              <thead style="background-color: SteelBlue ">
                                                <tr>
                                                        <th colspan="2" style="color:black">Articulo:</th>
                                                        <th colspan="3" style="color:black">nombre:</th>
                                                        <th colspan="3" style="color:black" >Metodo:</th>
                                                        
                                                        <th colspan="3" style="color:black">Costo Promedio</th>
                                                </tr>
                                                <tr>
                                                        <th colspan="2" style="color:black"></th>
                                                        
                                                        <th colspan="3" align="center" style="color:black">ENTRADAS</th>
                                                        <th colspan="3" align="center" style="color:black">SALIDAS</th>
                                                        <th colspan="3" align="center" style="color:black">EXISTENCIAS</th>
                                                        
                                                </tr>
                                                
                                                    
                                                </thead>
                                                 <tr>
                                                    
                                                        <th>Fecha</th>
                                                        <th>Detalle</th>
                                                        <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>
                                                         <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>
                                                         <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>

                                                       
                                                        
                                                       
                                                    </tr>
              <tbody class="buscar">
                @foreach($producto as $pro) 
                <tr class="gradeX">
                
                  <td>{{ $pro->id}}</td>
                  <td>compra</td>
                 
                  <td>sd</td>
<td>{{ $pro->idProveedor}}</td>
 <td>{{ $pro->idMarca}}<a>3</a></td>
                  <td ></td>
                  <td></td>
                  
                  <td> </td>
                  <td> xyz</td>

<td> xyz</td>

<td> xyz</td>

                 
                </tr>
                @endforeach

                
              </tbody>
            </table >
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
    <div id="Edit1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:ligth">> 
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