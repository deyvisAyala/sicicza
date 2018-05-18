  @extends('welcome')
@section('contenido')
<?php $message=Session::get('message');?>
<section id="main-content">
          <section class="wrapper">
      <div class="row" style="background-color: #b3cccc">
        <div class="col-lg-12">
        @if($message=='update')
          <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

</div>
@endif
@if($message=='create')
        <div class="alert alert-success alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong> •Sea creado con éxito el registro</strong>
        </div>
        @endif
          <h3 class="page-header"><i class="icon_document_alt"></i>  lista de Marcas</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
            <li><i class="fa fa-file-text"></i>Marcas</li>
            <li><i class="fa fa-pencil-square-o"></i>Ver marcas</li>
          </ol>
        </div>
      </div>
  <div class="">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Tabla de marcas</h5>
          </div>
          <div class="form-group" align="right">
                              <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                              <div class="col-xs-4">
                                <input id="filtrar" name="name" type="text" class="form-control">
                              </div>
          </div>
<br><br>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-hover" style="width:100%" >
                                            

                                                <thead align="center">
                                                <tr>
                                                        <th colspan="2">Articulo:</th>
                                                        <th colspan="3"></th>
                                                        <th colspan="3" >Metodo:</th>
                                                        
                                                        <th colspan="3">Costo Promedio</th>
                                                </tr>
                                                <tr>
                                                        <th colspan="2"></th>
                                                        
                                                        <th colspan="3" align="center">ENTRADAS</th>
                                                        <th colspan="3" align="center">SALIDAS</th>
                                                        <th colspan="3" align="center">EXISTENCIAS</th>
                                                        
                                                </tr>
                                                
                                                    
                                                </thead>
                                                <tr>
                                                    
                                                        <th>Fecha</th>
                                                        <th>Detalle</th>
                                                        <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>
                                                         <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>
                                                         <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>

                                                       
                                                        
                                                       
                                                    </tr>
                                                <tbody>

                                                    
                                                  <?php $total=0;
                                                    $te=0;

                                                    $vu=0;
                                                    $t=0;
                                                    $cont3=0;
                                                    $cont1=0;
                                                   ?>
                                                    @foreach($comp as $comps)
                                                    <?php 
                                                        for($cont=$cont3; $cont<count($ventas); $cont++)
                                                        {
                                                           /* while($comps->fechacompra > $ventas[$cont]->fechav )
                                                            {*/
                                                                if($comps->created_at > $ventas[$cont]->created_at)
                                                                {
                                                                    $cont3=$cont3+1;
                                                                    $cont1=$cont1+1;
                                                                    ?>
                                                                    
                                                                    <tr class="v">
                                                            
                                                        




                                                            <?php 
                                                        $a=($ventas[$cont]->cantidad*$vu);
                                                            $total=$total+$a;
                                                        $t=$t-($vu*$ventas[$cont]->cantidad);
                                                        $te=$te-$ventas[$cont]->cantidad;
                                                        if($te>0){$vu=$t/$te;}
                                                        else{$vu=0;}
                                                        ?>
                                                        <th  scope="row" ><?php echo $ventas[$cont]->fechav; ?></th>
                                                        
                                                        <td>Por Venta #<?php echo $ventas[$cont]->id?></td>
                                                        <td></td>
                                                       
                                                        <td></td>
                                                          <td>  </td>

                                                            <th><?php echo $ventas[$cont]->cantidad;?></th>
                                                        
                                                        <th><?php echo round($vu,2);?></th>
                                                         <th>$<?php echo round($a, 2);?></th>
                                                        
                                                        
                                                         <th><?php echo round($te,2);?></th>
                                                    
                                                        <th><?php echo round($vu,2);?></th>
                                                        
                                                        <th><?php echo round($t,2);?></th>
                    
                
                                                    </tr>


                                                        <?php 
                                                        
                                                       

                                                                }

                                                                }
                                                            
                                                        ?>
                                                    
                                                        
                                                    <tr class="v">

                                                        <?php 
                                                        
                                                        $a=($comps->cancompra*$comps->preciocomp);
                                                            $total=$total+$a;
                                                        $t=$t+($comps->preciocomp*$comps->cancompra);
                                                        $te=$te+$comps->cancompra;
                                                        $vu=$t/$te;
                                                        ?>
                                                        <th  scope="row" >{{ $comps->fechacompra }}</th>
                                                        
                                                        <td>Por Compra #{{ $comps->id}}</td>
                                                        <td>{{ $comps->cancompra}}</td>
                                                       
                                                        <td>$ {{ $comps->preciocomp}}</td>
                                                          <td> $

                                                          <?php
                                                            
                                                            echo round($a, 2);
                                                            ?></td>

                                                            <th></th>
                                                        
                                                        <th></th>
                                                         <th></th>
                                                        
                                                        
                                                         <th><?php echo $te;?></th>
                                                        
                                                        <th><?php echo round($vu,2);?></th>
                                                        
                                                        <th><?php   echo $t;?></th>
                                                        
                                                                                                                
                                                       
                                                    </tr>

                                                      @endforeach

                                                     
                                                      <?php 
                                                        for($cont=$cont1; $cont<count($ventas); $cont++)
                                                        {
                                                            ?>  

                                                            <tr class="v">
                                                            
                                                        




                                                            <?php 
                                                        $a=($ventas[$cont]->cantidad*$vu);
                                                            $total=$total+$a;
                                                        $t=$t-($vu*$ventas[$cont]->cantidad);
                                                        $te=$te-$ventas[$cont]->cantidad;
                                                           if($te>0){$vu=$t/$te;}
                                                           else{$vu=0;}
                                                        ?>
                                                        <th  scope="row" ><?php echo $ventas[$cont]->fechav; ?></th>
                                                        
                                                        <td>Por Venta #<?php echo $ventas[$cont]->id?></td>
                                                        <td></td>
                                                       
                                                        <td></td>
                                                          <td>  </td>

                                                            <th><?php echo $ventas[$cont]->cantidad?></th>
                                                        
                                                        <th><?php echo round($vu,2);?></th>
                                                         <th>$<?php echo round($a, 2);?></th>
                                                        
                                                        
                                                         <th><?php echo round($te,2);?></th>
                                                    
                                                        <th><?php echo round($vu,2);?></th>
                                                        
                                                        <th><?php echo round($t,2);?></th>
                    
                
                                                    </tr>



                                                            <?php

                                                        }
                                                        ?>
                                                </tbody>
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
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            
            <a > <img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" >  copyright</a> UES FMP <a >2017</a><img src="/SICICZA/public/img/minerva2.png" style="width:30px;height:30px;" > 
        </div>
    </div>
@endsection
@section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    
{!!Html::script('js/buscaresc.js')!!} 



  @endsection