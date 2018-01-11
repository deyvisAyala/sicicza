@extends('welcome')
@section('contenido')
<link rel="stylesheet" href="/sicicza/public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/sicicza/public/css/bootstrap-responsive.min.css" />

<?php $message=Session::get('message');?>
<section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc">
        <div class="col-lg-12">
        
          <h3 class="page-header"><i class="fa fa-truck "></i> Notificaciones</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-truck"></i>Notificaciones</li>
            <li><i class="fa fa-pencil-square-o"></i>Ver  Notificaciones</li>
          </ol>
        </div>
      </div>

                        
    <div class="row">
  <div class="form-group" align="right">
                          <p>
                            <img src="/sicicza/public/img/rojo.png" class="" alt="User Image" width="25px" height="25px"> Peligro &nbsp &nbsp &nbsp
                            
                            <img src="/sicicza/public/img/amarillo.jpg" class="" alt="User Image" width="30px" height="30px"> Advertencia  &nbsp &nbsp &nbsp
                            
                          </p>
                        </div>

                            @foreach ($productos as $v)
                             
                              

                              @if($v->estProducto==true)

                              @if($v->existencia<=$v->stock)
                                
          <div class="span4"  >
            <div class="widget-box" style="background-color: white;">
              <div class="widget-title alert-danger" align="center" style=" color: black;">
                
                  <i class="icon-th-list"></i>
                
                <h2> {{$v->nomProducto}}</h2>
              </div>
              <div class="widget-content" align="center" style="background-color: white;">
              <br>

                {{"Marca: ".$v->nomMarca}}
                                     <br>
                                     {{"Existencias: ".$v->existencia}}
                                     <br>
                                     {{"Minimo: ".$v->stock}}
                                     <br>
                                     {{"Descripcion: ".$v->catProducto}}
                                     <br>
              </div>
              <br>
              <div class="widget-title" style="background-color: lightgray;" align="center">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                {!!Form::open(['route'=>['compras.show',$v->idProveedor],'method'=>'GET'])!!}
                                            <input type="submit" name="" value="Ir a Comprar"   class="btn btn-danger " >
                                         {!!Form::close()!!}
              </div>
            </div>
          </div>
          @else
           @if($v->existencia<=($v->stock+10))
                                
          <div class="span4"  >
            <div class="widget-box" style="background-color: white;">
              <div class="widget-title alert-warning" align="center" style=" color: black;">
                
                  <i class="icon-th-list"></i>
                
                <h2> {{$v->nomProducto}}</h2>
              </div>
              <div class="widget-content" align="center" style="background-color: white;">
              <br>
                {{"Marca: ".$v->nomMarca}}
                                     <br>
                                     {{"Existencias: ".$v->existencia}}
                                     <br>
                                     {{"Minimo: ".$v->stock}}
                                     <br>
                                     {{"Descripcion: ".$v->catProducto}}
                                     <br>
              </div>
              <br>
              <div class="widget-title" style="background-color: lightgray;" align="center">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                {!!Form::open(['route'=>['compras.show',$v->idProveedor],'method'=>'GET'])!!}
                                            <input type="submit" name="" value="Ir a Comprar"   class="btn btn-warning " >
                                         {!!Form::close()!!}
              </div>
            </div>
          </div>
          @endif
          @endif
           
                             @endif
                           @endforeach
           
</div>

      </section>

</section>

@endsection
@section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    
{!!Html::script('js/buscaresc.js')!!} 


  @endsection