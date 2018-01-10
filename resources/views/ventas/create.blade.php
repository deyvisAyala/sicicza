@extends('welcome')
@section('contenido')
<?php $message=Session::get('message');?>
<section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc">
        <div class="col-lg-12">
          @include('alertas.request')
        @if($message=='stock')
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong> •Existencias insuficientes</strong>

</div>
@endif
@if($message=='create')
        <div class="alert alert-success alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong> •Sea creado con éxito el registro</strong>
        </div>
        @endif
          <h3 class="page-header" ><i class="fa fa-shopping-cart "></i> Registro De Ventas</h3>
          <ol class="breadcrumb" style="background-color: ">
            <li><i class="fa fa-home"></i><a href="/sicicza/public/proveedor/create">inicio</a></li>
            <li><i class="fa fa-money"></i>Ventas</li>
            <li><i class="fa fa-pencil-square-o"></i>Registrar Venta</li>
          </ol>
        </div>
      </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              Datos de la venta
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  
                                  {!! Form::open(['route'=>'tempoventa.store','method'=>'POST','class'=>'formhorizontal' ,'id'=>'frm1','name'=>'frm1'])
!!}
                                  <div class="form-group">


                                 <div class="form-group ">
                                    <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Buscar:</b></div>
                                                     
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                         
                                        <span class="input-group-addon"><i class="fa fa-search " style="color:MediumSeaGreen "></i></span>
                           
                                       <select class="form-control"  id="buscar" name="buscar">
                                       <option  value="0" >seleccione</option>
                                @foreach($marca as $mar)
                                       
                                <option  value="{{ $mar->id }}" >{{ $mar->nomMarca }} </option>
                           
                                  @endforeach                      
                            </select>
                                          
                                      </div>


                                       <div class=" col-md-1 col-md-offset-0 col-lg-1" ><td><b>Nombre:</b></div>
                               <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">

                                <span class="input-group-addon"><i class="fa fa-pencil-square-o " style="color:MediumSeaGreen "></i></span>
                                
                                  <select class="form-control"  id="cargar" name="cargar">
                               
                                       
                                <option  value="" ></option>
                           
                                                       
                            </select >
                             </div>
                            </div>
                            <br><br><br>

                             <div class="form-group ">
                                    <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Proveedor:</b></div>
                                                     
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                         
                                        <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                           
                                         <input id="idProveedor" name="idProveedor" type="text" placeholder="Ej. proveedor" class="form-control " required >
                                          
                                      </div>


                                       <div class=" col-md-1 col-md-offset-0 col-lg-1" ><td><b>Precio unitario:</b></div>
                               <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">

                                <span class="input-group-addon"><i class="fa fa-money " style="color:MediumSeaGreen "></i></span>
                                
                                 <input id="preUnitario" name="preUnitario" type="text" placeholder="0.00" class="form-control " required >
                             </div>
                            </div>
                            <br><br><br>

                               <div class="form-group ">
                                    <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>cantidad:</b></div>
                                                     
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                         
                                        <span class="input-group-addon"><i class="fa fa- " style="color:MediumSeaGreen ">#</i></span>
                           
                                         <input id="telefono" name="telefono" type="text" placeholder="digite una cantidad" class="form-control " required >
                                          
                                      </div>


                                       <div class=" col-md-1 col-md-offset-0 col-lg-1" ><td><b>Sub-total:</b></div>
                               <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">

                                <span class="input-group-addon"><i class="fa fa-money " style="color:MediumSeaGreen "></i></span>
                                
                                 <input id="nit" name="nit" type="text" placeholder="0.00" class="form-control " required >
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
                 
                  <th style="color: black">Producto</th>
                  <th style="color: black">Cantidad</th>
                  <th style="color: black">Précio</th>
                  
                  <th style="color: black">Subtotal</th>
                  <th style="color: black">Acción</th>
                </tr>
              </thead>
               <tbody class="buscar">
               <?php
                    $suma=0;
                ?>
                @foreach($aux as $pro) 
                <tr class="gradeX">
                
                  <td>{{ $pro->id}}</td>
                  <td>{{ $pro->nomProducto}}</td>
                 
                  <td>{{ $pro->cantidad}}</td>
                  <td>{{ $pro->precio}}</td>
                   
                     <td>
                                                           <?php
                                                           
                                                           //$d=$aux2->descompra2 / 100;
                                                            //$b=$d * ($aux2->cancompra2*$aux2->preciocomp2);
                                                            $a=($pro->cantidad*$pro->precio);// - $b;
                                                           // $iva=($p+$a)*0.13;
                                                            //$p=$p+$a;
                                                            
                                                           $suma=$suma+$a;
                                                            echo $a;
                                                            ?>
                                                        </td>
                    <td>
                                    {!!Form::open(['route'=>['tempoventa.destroy',$pro->id],'method'=>'DELETE'])!!}
                                                        <input type="submit" name="elimina" value="Eliminar"   class="btn btn-danger" >
                                                        {!!Form::close()!!}   

                                                        </td>
                    @endforeach
              
              </tbody>
             
            </table>
          </div>
        </div>
        
        
        
      </div>
    </div>
    </div>

<br><br><br>
{!! Form::open(['route'=>'tempoventa.store','method'=>'POST','class'=>'formhorizontal'])
!!}

                                     <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center">
                                                 <i class="fa fa-bookmark fa-3x" style="color:MediumSeaGreen   "></i>
                                            </span>
                                            <h1>Venta Total</h1> 
                                            
                                            
                                            

                                              <div class="form-group">
                                            
                                                    
                                                      <div class=" col-md-1 col-md-offset-1 col-lg-1" ><b>Monto:</b></div>
                                                     <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                                         

                                                        
                                                    <span class="input-group-addon"><i class="fa fa-money " style="color:MediumSeaGreen "></i></span>
                                                    <input id="monto" name="monto" type="number" value=<?php  echo $suma;?> class="form-control" required >
                                                    
                                                </div>
                                            </div>
<br><br><br>
                                          
                                      <br>
                                      <div class="form-group col-md-0">
                                          <div class="col-md-12 text-center" align="">
                                               <a href="#"   class="btn btn-primary" align=" center" data-id="1" data-toggle="modal" data-target ="#Edit">Vender</a></td>
                                             
                                      
                                          </div>
                                           

                                         
                                      </div>
                                       {!! Form::close() !!}


                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              
              <!-- page end-->

              <div id="Edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:ligth">> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="col-md-2  text-center" style="color:;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                <h4 class="modal-title" id="gridModalLabel" style="background: mediumaquamarine ;color:black" >Contrato del credito</h4>
            </div>
            <div class="modal-body" style="color:black">
                <div class="container-fluid bd-example-row" style="background:silver">
                    

                       {!! Form::open(['route'=>'ventas.store','method'=>'POST','class'=>'formhorizontal'])
!!}
                       
                        <fieldset>
                         <input type="hidden" name="hi2" value="1">

                       
                            
                            <br>
                            <div class="form-group ">
                                <!--<span class="col-md-2  text-center" ><label >Actividad: </label></span>-->
                                 <div >

                                           <div class="form-group ">
                                             <div class="col-md-2  col-lg-2 col-md-offset-1" > <td><b># factura:</b></div>
                                            <div class="col-md-3 col-lg-9" >
                                            <input type="text" id="numfactura" name="numfactura" class="textbox"  placeholder="numero factura"  required="">
                                            </div>

                                             <br>  <br>
                                    <div class="col-md-2  col-lg-2 col-md-offset-1" ><td><b>DUI:</b></div>
                                                     
                                     

                                            
                                            <div class="col-md-3 col-lg-9" >
                                            <input type="text" id="idcliente" name="" class="textbox"  placeholder="numero de DUI"  required="">
                                            </div>
            
                                            

                                            <br>  <br> 
                                            <div class="col-md-2  col-lg-2 col-md-offset-1" ><td><b>Cliente:</b></div>
                                                     
                                     

                                            
                                            <div class="col-md-3 col-lg-9" >
                                            <input type="text" id="clien" name="" class="textbox"  placeholder="nombre del cliente"  required="">
                                            </div>

                                            <input type="hidden" id="auxcli" name="idcliente" required="">

                                            <br>  <br> 

  
                                           
                                     <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>capacidad:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="text" class="textbox"  disabled="" id="cap"   >

                                       </div>
                                       <br>  <br> 
                                       <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>Prima:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="number" class="textbox" id="prima" name="prima" placeholder="" value="0" min="0" required="" >
                                       </div>


                                        <br><br>
                                        <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>fecha:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="date" class="textbox" id="fecha" name="fecha" placeholder="" value="" required="" >
                                       </div>


                                        <br><br>
                                       

                                        <div class="col-md-1 col-lg-2 col-md-offset-1""> <td><b>Cuotas:</b></div>
                                            <div class="col-md-3 col-lg-4" >
                                     
                                     
                                            
                                             <select class=" form-control" name="formap" id="formap">         
                                                             <option  value="6">6</option>
                                                             <option  value="12" >12</option>
                                                             <option  value="18" >18</option>
                                                               </select>
                                        </div>



                                                <br><br>
                                                <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>Total:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="text" class="textbox" id="total" name="total" placeholder="" value="<?php  echo $suma;?>" required="" >
                                       </div>

                                        <br><br> 
                                                <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>Monto cuota</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="text" class="textbox" id="cuotas" name="cuotas" placeholder="" value="<?php echo round((($suma/6)+(($suma/6)*0.25)),2);?>" required="" >
                                       </div>

                                        <br><br>
                                       <div class="col-md-2 col-lg-2 col-md-offset-1""> <td><b>Descripciòn:</b></div>
                                            <div class="col-md-3 col-lg-5" >
                                            <input type="text" id="d"  name="descripcion" class="textbox" placeholder="" value="" required="">
                                         </div>
                                       </div>
                               
                            </div> 
                            <br>
                            <br>
                                       
                                  
                        </fieldset>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success" disabled="" id="vender">Guardar</button>
                        </div>
                        {!! Form::close() !!}
                       
                </div>
            </div>
        </div>
    </div>
</div>
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