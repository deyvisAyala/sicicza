<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>
  
    <!-- Bootstrap CSS -->    
     
     
    {!!Html::style('css/bootstrap.min.css')!!}
    <!-- bootstrap theme -->
    
    {!!Html::style('css/bootstrap-theme.css')!!}
    <!--external css-->
    <!-- font icon -->
      

    {!!Html::style('css/elegant-icons-style.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!} 
    <!-- full calendar css-->
    {!!Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
    {!!Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css')!!}
    <!-- easy pie chart-->
    {!!Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
    <!-- owl carousel -->
    {!!Html::style('css/owl.carousel.css')!!}
    {!!Html::style('css/jquery-jvectormap-1.2.2.css')!!}
    <!-- Custom styles -->
    {!!Html::style('css/fullcalendar.css')!!}
    {!!Html::style('css/widgets.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    {!!Html::style('css/xcharts.min.css')!!}
    {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style >
footer {
            position: relative;
            /* Altura total del footer en px con valor negativo */
            margin-top: -50px;
            /* Altura del footer en px. Se han restado los 5px del margen
               superior mas los 5px del margen inferior
            */
            height: 105px;
            padding:5px 0px;
            clear: both;
            background: #286af0;
            text-align: center;
            color: #fff;
        }
    </style>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">COMERCIAL    <span class="lite">SANTA          CLARITA                           .</span></a>


           <img src="/SICICZA/public/img/sicicza2.png" style="width:105px;height:75px;" >
            <!--logo end-->

            

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Tiene Notificaciones...</p>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                               <img src="/SICICZA/public/img/user1.png" style="width:40px;height:40px;" >

                            </span>
                            <span class="username">{{ Auth::user()->name }}</span>

                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            
                          
                            <li>

                            
                                 <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i> 
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </li>
                            <li>
                                
                            </li>
                           
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="{{ url('/home') }}">
                          <i class="icon_house_alt" ></i>
                          <span>INICIO</span>
                      </a>
                  </li>
                  
                     <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i  class="fa fa-file-text" aria-hidden="true"></i>
                          <span>MARCAS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/sicicza/public/marca/create">REGISTRAR</a></li>                          
                          <li><a class="" href="/sicicza/public/marca">VER MARCAS</a></li>
                          <li><a class="" href="/sicicza/public/reporteProvee" target="_blank" >REPORTE MARCAS</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-truck"></i>
                          <span>PROVEEDOR</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/sicicza/public/proveedor/create">REGISTRAR</a></li>                          
                          <li><a class="" href="/sicicza/public/proveedor">VER PROVEEDORES</a></li>
                          <li><a class="" href="/sicicza/public/reporteProvee" target="_blank" >REPORTE PROVEED</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>INVENTARIO</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                                                  
                          <li><a class="" href="/sicicza/public/producto/create">REGISTRO </a></li>
                          <li><a class="" href="/sicicza/public/producto">VER PRODUCTOS</a></li>
                         
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i i class="fa fa-reddit" aria-hidden="true"></i>
                          <span>CLIENTES</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/sicicza/public/cliente/create">REGISTRAR</a></li>
                          <li><a class="" href="/sicicza/public/cliente">VER CLIENTES</a></li>
                          <li><a class="" href="/sicicza/public/reporteClienteA">REPORTE CLIENTES</a></li>
                      </ul>
                  </li>
                     
                <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-shopping-cart"></i>
                          <span>COMPRAS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/sicicza/public/compras/create">REGISTRAR</a></li>
                          <li><a class="" href="/sicicza/public/compras">VER COMPRAS</a></li>
                          <li><a class="" href="/sicicza/public/reporteCompra">Reporte x Fech</a></li>
                          
                          
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-money"></i>
                          <span>VENTAS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/sicicza/public/ventas/create">REGISTRAR VENTA</a></li>
                          <li><a class="" href="/sicicza/public/ventas">VER VENTAS</a></li>
                           <li><a class="" href="/sicicza/public/Factura">VER FACTURAS</a></li>
                      </ul>
                  </li>
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-key"></i>
                          <span>SEGURIDAD</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{ url('/register') }}">USUARIOS</a></li>
                           <li><a class="" href="/sicicza/public/creditos/create">BITACORA</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-question-circle"></i>
                          <span>AYUDA</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">VER</a></li>
                          
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
                
            @yield('contenido')
              
      

  </section>
      <!--    <br>  <br><br><br><br><br>  <br><br><br>
    <footer >
        <div align="center"> 
          <div class="col-md-2 col-md-offset-2">
              <img src="/sicicza/public/img/minerva.png" alt="Smiley face" width="100" height="100">
          </div>
          <div class="col-md-3 ">
          <br>
            <label>&copy TODOS LOS DERECHOS RESERVADOS</label>
            <br>
            <label>UNIVERSIDAD DE EL SALVADOR</label>
            <label>FMP</label>
          </div>
          <div class="col-md-2 ">
            <img src="/sicicza/public/img/minerva.png" alt="Smiley face" width="100" height="100">
          </div>
        </div>

      </footer>-->  

  <!-- container section start -->

    <!-- javascripts -->
    {!!Html::script('js/jquery.js')!!}
     {!!Html::script('js/jquery-ui-1.10.4.min.js')!!}
      {!!Html::script('js/jquery-1.8.3.min.js')!!}
       {!!Html::script('js/jquery-ui-1.9.2.custom.min.js')!!}
    <!-- bootstrap -->
       {!!Html::script('js/bootstrap.min.js')!!}
    <!-- nice scroll -->
       {!!Html::script('js/jquery.scrollTo.min.js')!!}
       {!!Html::script('js/jquery.nicescroll.js')!!}
    <!-- charts scripts -->
       {!!Html::script('assets/jquery-knob/js/jquery.knob.js')!!}
       {!!Html::script('js/jquery.sparkline.js')!!}
       {!!Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
       {!!Html::script('js/owl.carousel.js')!!}
    <!-- jQuery full calendar -->

       {!!Html::script('js/fullcalendar.min.js')!!}
       {!!Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js')!!}
    <!--script for this page only-->
    

       {!!Html::script('js/calendar-custom.js')!!}
       {!!Html::script('js/jquery.rateit.min.js')!!}
    <!-- custom select -->

       {!!Html::script('js/jquery.customSelect.min.js')!!}
       {!!Html::script('assets/chart-master/Chart.js')!!}
   
    <!--custome script for all page-->

       {!!Html::script('js/scripts.js')!!}
    <!-- custom script for this page-->
       {!!Html::script('js/sparkline-chart.js')!!}
       {!!Html::script('js/easy-pie-chart.js')!!}
       {!!Html::script('js/jquery-jvectormap-1.2.2.min.js')!!}
       {!!Html::script('js/jquery-jvectormap-world-mill-en.js')!!}
       {!!Html::script('js/xcharts.min.js')!!}
       {!!Html::script('js/jquery.autosize.min.js')!!}
       {!!Html::script('js/jquery.placeholder.min.js')!!}
       {!!Html::script('js/gdp-data.js')!!}
       {!!Html::script('js/morris.min.js')!!}
       {!!Html::script('js/sparklines.js')!!} 
       {!!Html::script('js/charts.js')!!}
       {!!Html::script('js/jquery.slimscroll.min.js')!!}
    {!!Html::script('js/buscaresc.js')!!} 
     
     {!!Html::script('js/buscaresc.js')!!}
       

  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });

  </script>

   </script>
   <!--{!!Html::script('js/jquery.js')!!}--> 
{!!Html::script('js/jquery.mask.js')!!}
{!!Html::script('js/jquery.mask.min.js')!!}
{!!Html::script('js/buscarMar.js')!!}


<script type="text/javascript">
  $(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.gUni').mask('00.00');
  $('.stock').mask('00');
  $('.correo').mask('"^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$" ');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.dui').mask('00000000-0');
  $('.nit').mask('0000-000000-000-0');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});
</script>


   @section('scripts')
   
| 

  </body>
</html>
