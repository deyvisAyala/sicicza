@extends('welcome')
@section('contenido')
$sum=0;
 <section id="main-content">
          <section class="wrapper">

      <div class="row" style="background-color: #b3cccc" >
        <div class="col-lg-12" >
          @include('alertas.request')
          <h3 class="page-header" ><i class="fa fa-shopping-cart "></i> Registro De Compra</h3>
          <ol class="breadcrumb" style="background-color: ">
            <li><i class="fa fa-home"></i><a href="/sicicza/public/proveedor/create">inicio</a></li>
            <li><i class="fa fa-shopping-cart"></i>Compras</li>
            <li><i class="fa fa-pencil-square-o"></i>Registrar compra</li>
          </ol>
        </div>
      </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              Datos de la compra
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  
                                  {!! Form::open(['route'=>'listaCompra.store','method'=>'POST','class'=>'formhorizontal' ,'id'=>'frm1','name'=>'frm1'])
!!}
                                     <div class="form-group">
                                      
                                                    

                                                     <div class="form-group ">
                         <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Producto:</b></div>
                                                     
                            <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                         
                             <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                           
                                       <select class="form-control" name="idProducto">
                               
                                        @foreach($producto as $pro)
                                        
                                        @if($pro->estProducto==1)
                                <option  value="{{ $pro->id }}" >{{ $pro->nomProducto }}  {{ $pro->nomMarca }}</option>
                                @endif
                            @endforeach
                            </select>
                                          
                                      </div>
                            </div>
                            
                            @foreach($producto as $pro)
                            <input type="hidden" value="{{ $pro->idProveedor }}" name="idProveedor">
                                       @endforeach                
                            
                              <div class=" col-md-1 col-md-offset-0 col-lg-1" ><td><b>Cantidad:</b></div>
                               <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                               <span class="input-group-addon"  style="color:MediumSeaGreen ">#<i class="fa fa yaria-hidden="true" " style="color:MediumSeaGreen "></i></span>
                                 <input id="ssss" name="cantidad" type="number" min="1" placeholder="Cantidad a comprar" class="form-control " required onkeyup="sumar();">
                             </div>

                                            
                                            <br><br><br>
                                                           
                                      <div class="form-group">
                                            
                                                     <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Précio unitario:</b></div>
                                                     <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                                    <span class="input-group-addon"><i class="fa fa-money " style="color:MediumSeaGreen "></i></span>
                                                    <input id="precio" name="precio" type="number" placeholder="Precio de compra unitario" class="form-control " min="1" max="99999" required onkeyup="sumar();">
                                                </div>
                                            </div>

                                          
                                            <br><br><br>
                                      <div class="form-group">
                                          <div class="col-md-12 text-center" align="center">
                                              <button class="btn btn-primary" type="submit">Agregar al carrito</button>
                                              
                                              
                                              {!! Form::reset('Limpiar',['class'=>'btn btn-danger' ]) !!}
                                          </div>
                                         
                                      </div>

                                  {!! Form::close() !!}


                  


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
          <table class="table table-bordered table-advance table-hover table-striped  data-table"  style="background-color: #c8daea">
              <thead style="background-color: SteelBlue ">
                <tr>
                  <th style="color: black">#</th>
                  <th style="color: black">Código</th>
                  <th style="color: black">Producto</th>
                  <th style="color: black">Cantidad</th>
                  <th style="color: black">Précio</th>
                  
                  <th style="color: black">Subtotal</th>
                  <th style="color: black">Acción</th>
                </tr>
              </thead>
               <tbody class="buscar">
             
                                                    <?php $cont=0; $sum=0; $p=0?>
                                                    @foreach($aux11 as $aux2)
                                                    

                                                    <tr>

                                                        <td><?php $cont++;  echo $cont; ?></td>
                                                        <td>{{ $aux2->idprods2 }}</td>
                                                        <td>{{ $aux2->nomProducto }}</td>
                                                        <td>{{ $aux2->cancompra2 }}</td>
                                                        <td>${{ $aux2->preciocomp2 }}</td>
                                                        
                                                        
                                                        <td>
                                                           <?php
                                                           
                                                           $d=$aux2->descompra2 / 100;
                                                            $b=$d * ($aux2->cancompra2*$aux2->preciocomp2);
                                                            $a=($aux2->cancompra2*$aux2->preciocomp2) - $b;
                                                            $iva=($p+$a)*0.13;
                                                            $p=$p+$a;
                                                            
                                                            $sum=$sum+$a;
                                                            echo $a;
                                                            ?>
                                                        </td>
                                                                                                                
                                                        <td>
                                    {!!Form::open(['route'=>['listaCompra.destroy',$aux2->id],'method'=>'DELETE'])!!}
                                                        <input type="submit" name="elimina" value="Eliminar"   class="btn btn-danger" >
                                                        {!!Form::close()!!}   

                                                        </td>
                                                         
                                                       
                                                    </tr>
                                                  
                                                  
                                                      @endforeach

                                                </tbody>
                
              </tbody>
             
            </table>
          </div>
        </div>
        
        
        
      </div>
    </div>
    </div>

<br><br><br>
{!! Form::open(['route'=>'compras.store','method'=>'POST','class'=>'formhorizontal'])
!!}
@foreach($producto as $pro)
                            <input type="hidden" value="{{ $pro->idProveedor }}" name="idProveedor">
                                       @endforeach 
                                     <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center">
                                                 <i class="fa fa-bookmark fa-3x" style="color:MediumSeaGreen   "></i>
                                            </span>
                                            <h1>Compra Total</h1> 
                                                <br><br>
                                            
                                            
                                               
                                             <div class="form-group">

                                             <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b> factura:</b></div>
                                                     <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                                    <span class="input-group-addon" style="color:MediumSeaGreen ">#<i class= style="color:MediumSeaGreen "></i></span>
                                                    <input id="numFac" name="nfactura" type="text" placeholder="Nunmero de factura" class="form-control" required >
                                                </div>
                                            
                                                    
                                            </div>
                                                <br><br><br> 

                                              <div class="form-group">
                                            
                                                     <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Fecha:</b></div>
                                                     <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                                    <span class="input-group-addon "><i class="fa fa-calendar" style="color:MediumSeaGreen "></i></span>
                                                    <input id="fecha" name="fecha" type="date" placeholder="fecha" class="form-control" required >
                                                </div>
                                           
                                                      <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Monto:</b></div>
                                                     <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                                    <span class="input-group-addon"><i class="fa fa-money " style="color:MediumSeaGreen "></i></span>
                                                    <input id="monto" name="monto" type="text" value="<?php echo (int)$sum; ?>" class="form-control" required >
                                                </div>
                                            </div>
<br><br><br>
                                            <div class="form-group">
                                            <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Descripción:</b></div>
                                                     <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                                    <span class="input-group-addon"><i class="fa fa-pencil-square-o " style="color:MediumSeaGreen "></i></span>
                                                    <textarea name="des" id="des" rows="4" cols="30"></textarea>
                                            </div>
                                                
                                                

                                      </div>
                                      <br><br>
                                       <div class="form-group">
                                          <div class="col-md-12 text-center" align="center">
                                              <button class="btn btn-primary" type="submit">Guardar</button>
                                          </div>
                                         
                                      </div>
                                       {!! Form::close() !!}


                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              
              <!-- page end-->
          </section>
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




</script>
@endsection
    @section('scripts')



<script type="text/javascript" charset="utf-8">
function sumar()
{
var a=document.frm1.cantidad.value;
var b=document.frm1.precio.value;
var c=(parseFloat(a)*parseFloat(b)).toFixed(4);
var e=parseFloat(d);
var f=0;
if(isNaN(a)){
   a=1;
  }
  if(isNaN(b)){
   b=1;
  }
    c= a*b;
  if(isNaN(c)){
   c=1;
  }
  if(isNaN(e)){
   e=0;
  }
  
   f=-((e/100)*c) + c;
   if(isNaN(f)){
   f=0;
  }
 document.frm1.subtotal.value=f.toFixed(2);
}
</script>
 @endsection