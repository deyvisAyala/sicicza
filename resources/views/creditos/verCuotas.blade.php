
@extends('welcome')
@section('contenido')
<?php $message=Session::get('message');?>
<section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc" >
        <div class="col-lg-12">
        @if($message=='update')
          <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong> •Sea actualizado con éxito el registro</strong>
</div>
@endif
@if($message=='create')
        <div class="alert alert-success alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong> •Sea creado con éxito el registro</strong>
        </div>
        @endif
          <h3 class="page-header"><i class="fa fa-user "></i>  ver clientes</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            
            <li><i class="fa fa-pencil-square-o"></i><a href="/sicicza/public/cliveedor/create"> Creditos Pendientes : </a></li>
          </ol>
        </div>
      </div>
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
            <div align="center">
               <button type="submit"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal2">Realizar Pago</button>
            </div>
            
<table class="table table-bordered table-advance table-hover table-striped data-table"  style="background-color: #c8daea "  >
              <thead style="background-color: SteelBlue">
                <tr>
                  <th style="color: black"># Cuota</th>
                  <th style="color: black">Fecha Cancelacion</th>
                  <th style="color: black">Monto por Cuota</th>
                  <th style="color: black">Mora Pagada</th>
                   <th style="color: black">Total pagado</th>
                   
                                                        
                 
                </tr>
              </thead>
              <tbody class="buscar">

                <?php $total=0; $total2=0; $total3=0; $con=1; ?>
                 @foreach($cuotas as $pro2)
                       
                             <tr class="v">                
                                  <th scope="row" ><?php echo $con;?></th>
                                  <?php $con++;?>
                                  <td>{{ $pro2->fecha }}</td>                     
                                  <td> $ {{ $pro2->monto}}</td>
                                  <td> $ {{ $pro2->mora}}</td>
                                  <td>{{ $pro2->total }}</td>
                                  <?php $total=$total+$pro2->total;?>
                                  <?php $total2=$total2+$pro2->mora;?>
                                  <?php $total3=$total3+$pro2->monto;?>                  
                            </tr>
                       
                 @endforeach
                </tbody>
                <tfoot>                                 
                 <tr align="center">                             
                     <td colspan="2"><p style="font-weight: bold;">Total</p></td>
                     <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total3,2);?></p></td>
                     <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total2,2);?></p></td>
                     <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total,2);?></p></td>
                 </tr>
                </tfoot>
            </table>
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>

 <div id="gridSystemModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header alert-warning" bgcolor="blue">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" >
          <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
        </span>
          <h4 class="modal-title" id="gridModalLabel3" >Registar pago</h4>

      </div>

      <div class="modal-body" id="modal-body">

        <div class="container-fluid bd-example-row">

          {!!Form::model($pago,['method'=>'PATCH','route'=>['creditos.update',$pago->id]])!!}
          
              
             
              <br>
              <div class="form-group">

                  <span class="col-md-2  text-center" ><label >Monto: </label></span>
                    
                    <div class="col-md-6" id="mo">
                        
                        <input  readonly="" id="monto" name="monto" type="text" placeholder="monto a pagar"    class="form-control" value="{{ $pago->monto }}" >
                        <span id="cajavendertexto"></span>
                        <input type="hidden" id="max" name="max" value="{{ $pago->pendiente }}">
                        <input type="hidden" id="min" name="min" value="{{ $pago->monto }}">

                                
                    </div>  
              </div> 
              <br><br><br>

              <div class="form-group">

                  <span class="col-md-2  text-center" ><label >Mora: </label></span>

                    <div class="col-md-6">
                        <?php
                        $fp=$pago->fecPago;
                        $fa=dameFecha(date("Y-m-d"),0);
                        $mor=0;
                        
                        while($fp<$fa) { 
                                //echo $fa;
                                $fp =date("Y-m-d", strtotime("$fp +1 month"));
                                $mor=$mor+($pago->monto*0.10);
                                
                                
                        }
                        
                        ?>


                      <input  id="mora" readonly name="mora" type="text" placeholder="" class="form-control" value="<?php echo $mor; ?>" readonly="">


                    </div>
              </div>
              <br><br>

              <div class="form-group">

                <span class="col-md-2  text-center" ><label >Fecha: </label></span>
                    
                  <div class="col-md-6">
                      
                    

                      <input id="fecha" name="fecha" type="date" readonly placeholder="% de descuento" class="form-control" value="<?php echo dameFecha(date("Y-m-d"),0);?>" > 

                  </div>
              </div>
              <br><br>

              <div class="form-group">

                <span class="col-md-2  text-center" ><label >Total: </label></span>

                  <div class="col-md-6">
                            
                    <input readonly id="total" name="total" type="text" placeholder="" class="form-control" value="<?php echo ($pago->monto+$mor)?>">
                               
                  </div>
              </div>
              <br>
              <br>

              <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Aceptar</button>

              </div>

          {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>


</section>
<div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the cli version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the cli version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            
            <a> <img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" >  copyright</a> UES FMP <a >2017</a><img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" > 
        </div>
    </div>
@endsection
 <?php 
$time=time();
    
    function dameFecha($fecha,$dia){
        list($year,$mon,$day)=explode('-',$fecha);
        return date('Y-m-d',mktime(0,0,0,$mon,$day+$dia,$year));    
    }
   $total=0; 


  
?>
