@extends('welcome')
@section('contenido')
 <section id="main-content">
          <section class="wrapper">
					<h3 class="page-header"><i class="fa fa-truck "></i> Proveedores</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i>Inicio</li>
						<li><i class="fa fa-truck"></i><a href="/sicicza/public/proveedor">Bitacora</a></li>
						<li><i class="fa fa-pencil-square-o"></i><a href="/sicicza/public/proveedor/create">Ver Bitacora</a></li>
					</ol>
				</div>
			</div>
  <div class="">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>tabla de datos</h5>
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
                  <th style="color: black">Descripcion</th>
                  <th style="color: black">Fecha</th>
                  <th style="color: black">Hora</th>
                  <th style="color: black">Usurio</th>
                  
                </tr>
              </thead>
              <tbody class="buscar">
              	
                <tr class="gradeX">
                
                  <td>1</td>
                  <td>por compra de 5 mesas</td>
                  <td>28/09/2017</td>
                  <td>01:10 AM</td>

                  <td class="center">JUAN ANTONIO BAUTISTA</td>
                  
                </tr>
              

                
              </tbody>
            </table>
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>

</section>
@endsection
@section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    
{!!Html::script('js/buscaresc.js')!!} 


  @endsection