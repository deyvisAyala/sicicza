@extends('welcome')
@section('contenido')


<section id="main-content">
  <section class="wrapper">
      <div class="row" style="background-color: #b3cccc" >
        <div class="col-lg-12" >
           @include('alertas.request')
       
       
          <h3 class="page-header" ><i class="fa fa-shopping-cart "></i> Registro De Cliente</h3>
          <ol class="breadcrumb" style="background-color: ">
            <li><i class="fa fa-home"></i><a href="/sicicza/public/proveedor/create">inicio</a></li>
            <li><i class="fa fa-shopping-cart"></i>Clientes</li>
            <li><i class="fa fa-pencil-square-o"></i>Registrar cliente</li>
          </ol>
        </div>
      </div>

      <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              Datos del Cliente
                          </header>
                          <div class="panel-body">
                              <div class="form">

                              {!! Form::open(['route'=>'cliente.store','method'=>'POST','class'=>'form-horizontal']) !!}
                              <div class="form-group">


                                 <div class="form-group ">
                                    <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Nombre:</b></div>
                                                     
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                         
                                        <span class="input-group-addon"><i class="fa fa-user " style="color:MediumSeaGreen "></i></span>
                           
                                         <input id="nombre" name="nombre" type="text" placeholder="Ingrese nombre del cliente" class="form-control " required >
                                          
                                      </div>


                                       <div class=" col-md-1 col-md-offset-0 col-lg-1" ><td><b>Dui:</b></div>
                               <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">

                                <span class="input-group-addon"><i class="fa fa-indent" style="color:MediumSeaGreen "></i></span>
                                
                                 <input id="dui" name="dui" type="text" placeholder="Dui. Ej:77777777-7" class="form-control dui" required >
                             </div>
                            </div>

                             <div class="form-group ">
                                    <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>Telefono:</b></div>
                                                     
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                         
                                        <span class="input-group-addon"><i class="fa fa-phone " style="color:MediumSeaGreen "></i></span>
                           
                                         <input id="telefono" name="telCliente" type="text" placeholder="Ej. 7777-7777" class="form-control phone" required >
                                          
                                      </div>


                                       <div class=" col-md-1 col-md-offset-0 col-lg-1" ><td><b>Nit:</b></div>
                               <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">

                                <span class="input-group-addon"><i class="fa fa-indent " style="color:MediumSeaGreen "></i></span>
                                
                                 <input id="nit" name="nit" type="text" placeholder="Ej. 7777-777777-777-7" class="form-control nit" required >
                             </div>
                            </div>

                               <div class="form-group ">
                                    <div class=" col-md-1 col-md-offset-1 col-lg-1" ><td><b>ingreso mensual:</b></div>
                                                     
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">
                                         
                                        <span class="input-group-addon"><i class="fa fa-dollar " style="color:MediumSeaGreen "></i></span>
                           
                                         <input type="number" min="0" id="cemail" name="email" class="form-control" placeholder="ingresos"  required>
                                          
                                      </div>


                                       <div class=" col-md-1 col-md-offset-0 col-lg-1" ><td><b>Direccion:</b></div>
                               <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-4">

                                <span class="input-group-addon"><i class="fa fa-pencil-square-o " style="color:MediumSeaGreen "></i></span>
                                
                                 <input id="direccion" name="direccion" type="text" placeholder="Digite la direccion del cliente" class="form-control " required >
                             </div>
                            </div>




                              </div>

                               <div class="form-group">
                                          <div class="col-md-12 text-center" align="center">
                                              <button class="btn btn-primary" type="submit">Guardar</button>
                                              
                                              {!! Form::reset('Limpiar',['class'=>'btn btn-danger' ]) !!}
                                          </div>
                                      </div>
                  
                               {!! Form::close() !!}

                              </div>
                          </div>
                      </section>
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
            
            <a> <img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" >  copyright</a> UES FMP <a >2017</a><img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" > 
        </div>
    </div>
@endsection

      
     