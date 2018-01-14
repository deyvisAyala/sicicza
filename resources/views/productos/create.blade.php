@extends('welcome')
@section('contenido')

 <section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="icon_document_alt"></i>Registrar Productos</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-file-text"></i>productos</li>
            <li><i class="fa fa-pencil-square-o"></i>Registrar producto</li>
          </ol>
        </div>
      </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              Datos del Producto
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  
                                  {!! Form::open(['route'=>'producto.store','method'=>'POST','class'=>'form-horizontal']) !!}
                
                    <fieldset>
                        

                        
                        <br>
                        <div class="form-group">
                             <div class="col-md-offset-2 col-lg-1" ><td><b>Nombre:</b></div>
                            <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-5">
                             <span class="input-group-addon"><i class="icon_document_alt" style="color:MediumSeaGreen "></i></span>
                                <input id="nom" name="nomProducto" type="text" placeholder="Ingrese el nombre del Producto" required class="form-control">
                                
                            </div>

                        </div>

                          <div class="form-group ">
                         <div class="col-md-offset-2 col-lg-1" ><td><b>Marca:</b></div>
                            <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-5">
                                         
                             <span class="input-group-addon"><i class="fa fa-file-text" style="color:MediumSeaGreen "></i></span>
                           
                                       <select class="form-control" name="idMarca">
                               
                                        @foreach($marca as $mar)
                                <option  value="{{ $mar->id }}" >{{ $mar->nomMarca }}</option>
                            @endforeach
                                                       
                            </select>
                                          
                                      </div>
                            </div>
                        

                        <div class="form-group">
                         <div class="col-md-offset-2 col-lg-1" ><td><b>Ganancia:</b></div>
                            <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-5">
                            <span class="input input-group-addon"><i style="color:MediumSeaGreen " style=" font-weight: bold;">%</i></span>
                                <input id="gUni"
                                 name="preProducto" type="text" placeholder="Ingrese porcentaje de ganancia del producto"  class="form-control gUni" required="">
                            </div>

                            
                            

                        </div>

                         <div class="form-group">
                             <div class="col-md-offset-2 col-lg-1" ><td><b>stock:</b></div>
                            <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-5">
                             <span class="input-group-addon"><i class="fa fa-tags " style="color:MediumSeaGreen "></i></span>
                                <input id="stock" required name="stock" type="text" required placeholder="Ingrese la cantidad minima" class="form-control stock" >
                            </div>
                        </div>
                        
                        
                         <div class="form-group ">
                         <div class="col-md-offset-2 col-lg-1" ><td><b>Proveedor:</b></div>
                            <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-5">
                                         
                             <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                           
                                       <select class="form-control" name="idProveedor">
                               
                                        @foreach($proveedor as $pro)
                                <option  value="{{ $pro->id }}" >{{ $pro->nomProveedor }}</option>
                            @endforeach
                                                       
                            </select>
                                          
                                      </div>
                            </div>
                                    
                       

                         <div class="form-group">
                            <div class="col-md-offset-2 col-lg-1" ><td><b>Descripciòn:</b></div>
                            <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-5">
                             <span class="input-group-addon"><i class="fa fa-book " style="color:MediumSeaGreen "></i></span>
                                <input id="nom" name="catProducto" type="text" placeholder="Ingrese una descripciòn del producto" required class="form-control">
                                
                            </div>

                            
                        
                        </div>
                            
                        <div class="form-group">
                            <div class="col-md-12 text-center" align="left">
                               <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </fieldset>
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
            
            <a> <img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" >  copyright</a> UES FMP <a >2017</a><img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" > 
        </div>
    </div>

@endsection
