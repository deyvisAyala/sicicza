@extends('welcome')
@section('contenido')

 <section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc" >
        <div class="col-lg-12" >
          <h3 class="page-header" ><i class="fa fa-truck "></i> Registro De Venta</h3>
          <ol class="breadcrumb" style="background-color: ">
            <li><i class="fa fa-home"></i><a href="/sicicza/public/proveedor/create">inicio</a></li>
            <li><i class="fa fa-truck"></i>guardar</li>
            <li><i class="fa fa-pencil-square-o"></i>cancelar</li>
          </ol>
        </div>
      </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel" style="background-color: #d9e6f2  ">
                          <header class="panel-heading">
                              Datos De La Venta
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  
                                  {!! Form::open(['route'=>'proveedor.store','method'=>'POST','class'=>'formhorizontal'])
!!}
                                     <div class="form-group">

                                                <span class="col-md-1 col-md-offset-1 text-center">
                                                    <i class="fa fa-search fa-3x" style="color:MediumSeaGreen   "></i>
                                                </span>
                                                

                                                    <div class="col-xs-4">
                                                    <input id="fname" name="nombreE" type="text"  placeholder="Busque por nombre producto" class="form-control" required>
                                                     </div>

                                                 <span class="col-md-1  text-center">
                                                    <i class="fa fa-pencil fa-3x" style="color:MediumSeaGreen   "></i>
                                                </span>
                                                <div class="col-xs-4">
                                                    <input id="fname" name="nombreE" type="search" disabled="" placeholder="Nombre del Producto" class="form-control" required>
                                                </div>

                                                
                                            </div>
                                           <br> <br><br><br>
                                       <div class="form-group">
                                        <span class="col-md-1 col-md-offset-1 text-center">
                                                    <i class="fa fa-truck fa-3x" style="color:MediumSeaGreen   "></i>
                                                </span>
                                               <div class="col-xs-4"> 
                                                    <select class="form-control" name="sexo">
                                                    <option>--Selecione un Proveedor--</option>
                                                    </select>
                                                </div>

                                                 <span class="col-md-1  text-center">
                                                    <i class="fa fa-hashtag fa-3x" style="color:MediumSeaGreen   "></i>
                                                </span>
                                                 <div class="col-xs-4">
                                                    <input id="dui" name="dui" type="text" placeholder="Unidades a vender" class="form-control" required>
                                                </div>

                                            </div>
                                            <br><br><br>
                                                           
                                      <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center">
                                               
                                            </span>
                                             

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-1 text-center">
                                                    <i class="fa fa-usd bigicon  fa-3x" style="color:MediumSeaGreen  "></i>
                                                </span>
                                                <div class="col-xs-4">
                                                    <input id="dui" name="dui" type="text" placeholder="SubTotal" class="form-control" required>
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
            <h5>carrito de la venta</h5>
          </div>
          <div class="form-group" align="right">
                              <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                              <div class="col-xs-4">
                                <input id="filtrar" name="name" type="text" class="form-control">
                              </div>
                            </div>
                            <br><br>
          <div class="widget-content nopadding">
          <table class="table table-bordered data-table"  style="background-color: #c8daea">
              <thead style="background-color: SteelBlue ">
                <tr>
                  <th style="color: black">#</th>
                 
                  <th style="color: black">Producto</th>
                  <th style="color: black">Cantidad</th>
                  
                  <th style="color: black">Descuento</th>
                  <th style="color: black">Subtotal</th>
                  <th style="color: black">Accion</th>
                </tr>
              </thead>
               <tbody class="buscar">
               <td>1</td>
               
               <td>1</td>
               <td>2</td>
               <td>10.0</td>
               
               <td>20.0</td> <td> <a href="#"   class="btn btn-danger" align=" center" data-id="1"  data-target ="#Edit1">eliminar</a></td>
                
              </tbody>
             
            </table>
          </div>
        </div>
        
        
        
      </div>
    </div>
    </div>

<br><br><br>
                                     <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center">
                                                 <i class="fa fa-bookmark fa-3x" style="color:MediumSeaGreen   "></i>
                                            </span>
                                            <h1>Compra Total</h1> 
                                                <br><br>
                                            <span class="col-md-1 col-md-offset-1 text-center">
                                                 <i class="fa fa-money fa-3x" style="color:MediumSeaGreen   "></i>
                                            </span>
                                             <div class="col-xs-4">
                                                    <input id="fname" name="nombreE" type="text" disabled="" placeholder="Total" class="form-control" required>
                                                </div>

                                                 <span class="col-md-1 text-center">
                                                 <i class=" fa fa-percent fa-3x" style="color:MediumSeaGreen   "></i>
                                            </span>
                                             <div class="col-xs-4">
                                                    <input id="fname" name="nombreE" type="text" disabled="" placeholder="I V A incluido" class="form-control" required>
                                                </div>
                                                

                                      </div>
                                      <br><br>
                                       <div class="form-group">
                                          <div class="col-md-12 text-center" align="center">
                                             <td> <a href="#"   class="btn btn-info" data-id="1" data-toggle="modal" data-target="#Edit1">credito</a></td>
                                             <td> <a href="#"   class="btn btn-success" data-id="1" data-toggle="modal" data-target="#Edit2">contado</a></td>
                                          </div>
                                         
                                      </div>

                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              
              <!-- page end-->
          </section>
          <div id="example" class="modal hide fade in" style="display: none;">
    <div class="modal-header">
        <a data-dismiss="modal" class="close">×</a>
        <h3>Cabecera de la ventana</h3>
     </div>
     <div class="modal-body">
         <h4>Texto de la ventana</h4>
        <p>Mas texto en la ventana.</p>                
    </div>
    <div class="modal-footer">
        <a href="index.html" class="btn btn-danger" align="left">Guardar</a>
        <a href="#" data-dismiss="modal" class="btn" align="center">Cerrar</a>
    </div>
</div>
    <div id="Edit1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:ligth">> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="col-md-2  text-center" style="color:;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                <h4 class="modal-title" id="gridModalLabel" style="background: mediumaquamarine ;color:black" >Datos para el credito</h4>
            </div>
            <div class="modal-body" style="color:black">
                <div class="container-fluid bd-example-row" style="background:silver">
                 
                    <input type="hidden" name="bandera" value="2">
                        <fieldset>
                            
                            <br>
                            <div class="form-group">
                                <!--<span class="col-md-2  text-center" ><label >Actividad: </label></span>-->
                                 <div class="col-lg-3">
                                            <label>Codigo</label>
                                             <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                             <br>
                                            <label>Nombre</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" disabled >
                                             <label>DUI</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" disabled >
                                             <br>
                                            <label>prima</label>
                                             <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                           <br>
                                     <label>#cuota</label>
                                     
                                              <select class="form-control" name="idProveedor">
                               
                                       
                                <option  >3</option>

                                <option  >6</option>

                                <option  >9</option>

                                <option  >12</option>
                           
                                                       
                            </select>
                                        
                                      <label>fecha</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                      <label>subtotal</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                      <label>IVA</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                      <label>total</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >     
                                         <label>por cuota</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >       
                                      <label>descripciòn</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                    
                                        </div>
                                <div class="col-md-3">
                                   
                                </div>    
                            </div> 
                            <br>
                            <br>
                                       
                                  
                        </fieldset>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Realizar</button>
                        </div>
                         
                </div>
            </div>
        </div>
    </div>
</div>
 <div id="Edit2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" style="background:ligth">> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="col-md-2  text-center" style="color:;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
                <h4 class="modal-title" id="gridModalLabel" style="background: mediumaquamarine ;color:black" >venta al contado</h4>
            </div>
            <div class="modal-body" style="color:black">
                <div class="container-fluid bd-example-row" style="background:silver">
                 
                    <input type="hidden" name="bandera" value="2">
                        <fieldset>
                            
                            <br>
                            <div class="form-group">
                                <!--<span class="col-md-2  text-center" ><label >Actividad: </label></span>-->
                                 <div class="col-lg-3">
                                            
                                            <label>Nombre</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                            
                                            
                                        
                                      <label>fecha</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                      <label>subtotal</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                      <label>IVA</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                      <label>total</label>
                                            <br>
                                            
                                            <input type="text" class="textbox" size="30" placeholder="" >       
                                      <label>descripciòn</label>
                                            <br>
                                            <input type="text" class="textbox" size="30" placeholder="" >
                                    
                                        </div>
                                <div class="col-md-3">
                                   
                                </div>    
                            </div> 
                            <br>
                            <br>
                                       
                                  
                        </fieldset>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Realizar</button>
                        </div>
                         
                </div>
            </div>
        </div>
    </div>
</div>
      </section>

@endsection
    