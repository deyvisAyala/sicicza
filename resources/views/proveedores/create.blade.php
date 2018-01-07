@extends('welcome')
@section('contenido')



 <section id="main-content">

          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc" >
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-truck "></i> Proveedores</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-eye"></i><a href="/sicicza/public/proveedor">Ver proveedores</a></li>
            
          </ol>
        </div>
      </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              Datos del Proveedor
                          </header>

                          <div class="panel-body">
                              <div class="form">
                                  
                                  {!! Form::open(['route'=>'proveedor.store','method'=>'POST','class'=>'formhorizontal'])
!!}
                                     
                                     <div>
                                      <div class="col-md-offset-2 col-lg-1" ><td><b>Nombre:</b></div>
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-6">
                                            <span class="input-group-addon"><i class="fa fa-user " style="color:MediumSeaGreen "></i></span>
                                              <input type="text" id="cname" name="nomProveedor" class="form-control" placeholder="Ingrese nombre del proveedor" required minlength="3" >
                                       </div>
                                       </div>
                                       
                                      <br><br><br>
                                      <div class="col-md-offset-2 col-lg-1" ><b>Telèfono:</b></div>
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-6">
                                            <span class="input-group-addon"><i class="fa fa-phone " style="color:MediumSeaGreen "></i></span>
                                              <input type="tel" id="tel" name="telProveedor" placeholder="Ej.7777-7777"class="form-control phone" required >
                                       </div>

                                      <br><br><br>
                                      <div class="col-md-offset-2 col-lg-1" ><b>Correo:</b></div>
                                      <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-6">
                                            <span class="input-group-addon"><i class="fa fa-envelope " style="color:MediumSeaGreen "></i></span>
                                              <input type="email" id="cemail" name="EmailProveedor" pattern="^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$" class="form-control" placeholder="Ingrese correo del proveedor ej: ejemplo@algo.algo" title="Ej:micorreo@tmail.com" required>
                                       </div>

                                      
    
                                      
                                             <br><br> <br> 
                                              <div class="col-md-offset-2 col-lg-1" ><b>Direcciòn:</b></div>
                                              <div class="input-group input-group-lg-5 col-md-offset-0 col-lg-6">
                                            <span class="input-group-addon"><i class="fa fa-pencil-square-o " style="color:MediumSeaGreen "></i></span>
                                              
                                              <textarea class="form-control " id="ccomment" name="dirProveedor" placeholder= "Ingrese la direcciòn del proveedor" required></textarea>
                                          
                                       </div>

                                        
                                      <br><br><br>
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

@endsection
@section('scripts')
 <script type="text/javascript">
   
   $(document).ready(function(){
$('#aux').on('change','#idcodproduc',function (){
  
  var producto=$("#idcodproduc").val();

     var ruta="/Finanzas/public/llenadoProducto/"+producto;

 $.get(ruta, function(res){
  $(res).each(function(key,value){
    if (value.estado==true) {
       $("#hprod").val(value.id);
       $("#nomproducto").val(value.nomProd);
       $("#idProve").val(value.idProve);
       
       }
      else{
        $("#hprod").val("");
       $("#nomproducto").val("");
       $("#idProve").val(0);
       $("#myModal").modal()

      }

      });
  
 });
});
  
 }); 
 </script>

  @endsection
| 
