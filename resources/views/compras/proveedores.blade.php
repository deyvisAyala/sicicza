@extends('welcome')
@section('contenido')
<link rel="stylesheet" href="/sicicza/public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/sicicza/public/css/bootstrap-responsive.min.css" />

<?php $message=Session::get('message');?>
<section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc">
        <div class="col-lg-12">
        
          <h3 class="page-header"><i class="fa fa-truck "></i> Comprar</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-truck"></i>compras</li>
            <li><i class="fa fa-pencil-square-o"></i>registro de compras</li>
          </ol>
        </div>
      </div>

                        
    <div class="row">
  

                            @foreach ($Vproveedor as $v)
                             
                              

                              @if($v->estProveedor==true)
                                
          <div class="span4"  >
            <div class="widget-box" style="background-color: white;">
              <div class="widget-title" align="left" style="background-color: #9FF781; color: black;">
                
                  <i class="icon-th-list"></i>
                
                <h2> {{$v->nomProveedor}}</h2>
              </div>
              <div class="widget-content" style="background-color: white;">
              <br>
                {{"Telefono: ".$v->telProveedor}}
                                     <br>
                                     {{"E-mail: ".$v->EmailProveedor}}
                                     <br>
                                     {{"Descripcion: ".$v->dirProveedor}}
                                     <br>
              </div>
              <br>
              <div class="widget-title" style="background-color: lightgray;" align="center">
                <span class="icon">
                  <i class="icon-th-list"></i>
                </span>
                {!!Form::open(['route'=>['compras.show',$v->id],'method'=>'GET'])!!}
                                            <input type="submit" name="" value="Realizar Compra"   class="btn btn-success " >
                                         {!!Form::close()!!}
              </div>
            </div>
          </div>
           
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