@extends('welcome')
@section('contenido')

 <section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc">
        <div class="col-lg-12">
          <h3 class="page-header"><i  class="fa fa-file-text" ></i>Registrar Marcas</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-file-text"></i>Marcas</li>
            <li><i class="fa fa-pencil-square-o"></i>Registrar marcas</li>
          </ol>
        </div>
      </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              Datos de la Marca
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  
                                  {!! Form::open(['route'=>'marca.store','method'=>'POST','class'=>'form-horizontal']) !!}
                
                    <fieldset>
                        

                        
                        <br>
                        <div class="form-group">
                             <div class="col-md-offset-2 col-lg-1" ><td><b>Nombre:</b></div>
                            <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-5">
                             <span class="input-group-addon"><i class="fa fa-file-text " style="color:MediumSeaGreen "></i></span>
                                <input id="nom" name="nomMarca" type="text" placeholder="Ingrese el nombre de la marca" required class="form-control">
                                
                            </div>

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
