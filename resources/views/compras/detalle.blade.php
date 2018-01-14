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
          <h3 class="page-header"><i class="fa fa-truck "></i>Compras</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            
            <li><i class="fa fa-shopping-cart"></i> compras </li>
          </ol>
        </div>
      </div>
  <div class="">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h2><b>Productos comprados al Proveedor: {{  $compra[0]->nomProveedor}}<b></h2>
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
                  <th style="color: black">Nombre Producto</th>
                  
                   <th style="color: black">Cantidad comprada </th>
                  <th style="color: black">Précio compra</th>
                 
                  <th style="color: black">Total</th>
                 
                </tr>
              </thead>
              <tbody class="buscar">
                  <?php
                      $totalF=0;
                  ?>
                @foreach($compra as $com) 
                <tr class="gradeX">
                
                  <td>{{ $com->id}}</td>
                  <td>{{ $com->nomProducto}}</td>
                     <td>{{ $com->cancompra}}</td>
                  <td>${{ $com->preciocomp}}</td>
               
                  <?php
                      $total=$com->preciocomp*$com->cancompra;
                      $totalF=$totalF+$total;
                  ?>
                  <td>$ <?php echo $total;?></td>
                
                </tr>
                @endforeach
                
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4" align="center">Total</td>
                  <td >$<?php echo $totalF;?></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>
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