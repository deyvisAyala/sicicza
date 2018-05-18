@extends('welcome')
@section('contenido')
<style>
  .vertical{
    position: static !important;
   } 
</style>
<section id="main-content">
  <section class="wrapper">
      <div class="row" style="background-color: #b3cccc" >
        <div class="col-lg-12" >
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

                              {!! Form::open(['route'=>'referencia.store','method'=>'POST','class'=>'form-horizontal']) !!}
                              <div class="">
                                  <div class="row">
                                 

                                      
                                 <b5> <h3>&nbsp &nbsp &nbsp &nbsp &nbspReferencia Familiar:  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbspReferencia Personal:</h3>  </b5>
                                  <div class="col-md-6">
                                    
                                    <div class="col-md-12">
                                      <div class=" col-md-12 col-md-offset-12 col-lg-12" ><td><b>Nombre:</b></div>
                                      <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                        <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                                         <input id="nombre1" name="nombre1" type="text" placeholder="Ingrese nombre de la referencia familiar" class="form-control " required >
                                      </div>
                                    </div>
                                    <br>          
                                    <div class="col-md-12">
                                     <div class=" col-md-12 col-md-offset-0 col-lg-12" ><td><b>Telefono:</b></div>
                               <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                                 <input id="telefono1" name="telefono1" type="text" placeholder="Ej. 7777-7777" class="form-control phone" required >
                                  </div>
                                    </div>

                                    <br>
                                    <div class="col-md-12">
                                      <div class=" col-md-12 col-md-offset-12 col-lg-12" ><td><b>Direccion:</b></div>
                                      <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                        <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                                         <input id="direccion1" name="direccion1" type="text" placeholder="Ingrese nombre del cliente" class="form-control " required >
                                      </div>
                                    </div>

                                  </div>


                                    
                                  <div class="col-md-6">
                                   <div class="col-md-12">
                                      <div class=" col-md-12 col-md-offset-12 col-lg-12" ><td><b>Nombre:</b></div>
                                      <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                        <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                                         <input id="nombre2" name="nombre2" type="text" placeholder="Ingrese nombre de la referencia familiar" class="form-control " required >
                                      </div>
                                    </div>
                                    <br>          
                                    <div class="col-md-12">
                                     <div class=" col-md-12 col-md-offset-0 col-lg-12" ><td><b>Telefono:</b></div>
                               <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                                 <input id="telefono2" name="telefono2" type="text" placeholder="Dui. Ej:7777-7777" class="form-control phone" required >
                                  </div>
                                    </div>

                                    <br>
                                    <div class="col-md-12">
                                      <div class=" col-md-12 col-md-offset-12 col-lg-12" ><td><b>Direccion:</b></div>
                                      <div class="input-group input-group-lg-12 col-md-offset-0 col-lg-12">
                                        <span class="input-group-addon"><i class="fa fa-truck " style="color:MediumSeaGreen "></i></span>
                                         <input id="direccion2" name="direccion2" type="text" placeholder="Ingrese nombre del cliente" class="form-control " required >
                                      </div>
                                    </div>
                                  </div>

          

                              </div>

                              <br><br>
                              <input type="hidden" value="{{ $Aux }}" name="idCliente">

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

      
     