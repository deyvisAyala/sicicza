
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
            
<table class="table table-bordered table-advance table-hover table-striped data-table"  style="background-color: #c8daea "  >
              <thead style="background-color: SteelBlue">
                <tr>
                  <th style="color: black">#Credito</th>
                  <th style="color: black">proxima Fecha de pago</th>
                  <th style="color: black">#cuotas</th>
                  <th style="color: black">Monto por cuota</th>
                   <th style="color: black">Pendiente</th>
                    <th style="color: black">total</th>
                  <th style="color: black"><div align="center">Acción</div></th>
                 
                 
                </tr>
              </thead>
              <tbody class="buscar">

                <?php $total=0; $con=1; ?>
                 @foreach($pago as $pro)
                       
                             <tr class="v">                
                                <th scope="row" ><?php echo $con;?></th>
                                <?php $con++;?>
                                 <td>{{ $pro->fecPago }}</td>
                                 <td>{{ $pro->cuotas }}</td>
                                 <?php $total=$total+$pro->monto; ?>
                                 <td> $ {{ $pro->monto}}</td>
                                 <td> $ {{ $pro->pendiente}}</td>
                                 @if($pro->cuotas==0)

                                 <td> $ {{ $pro->montov}}</td>
                                  @else
                                  <?php $total2=($pro->monto*$pro->cuotas); ?>
                                  <td>$ <?php echo $total2;?></td>
                                  @endif
                                 <td>
                                    
                                    <a class="btn btn-info" href="/sicicza/public/pagarCredito/{{ $pro->id }}">Pagar</a>
                                 </td>                    
                            </tr>
                       
                 @endforeach
                </tbody>
                <tfoot>                                 
                 <tr align="center">                             
                    <td colspan="3"><p style="font-weight: bold;">Total Mensual</p></td>
                    <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total,2);?></p></td>
                    <td colspan="1" ></td>
                 </tr>
                </tfoot>
            </table>
          </div>
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

