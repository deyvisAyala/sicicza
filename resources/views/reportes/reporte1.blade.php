<html>
<head>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #ddd;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>

    <h1>Reporte De Proveedores</h1>
    <h2>Comercial Santa Clarita</h2>
    <img src="img/sicicza2.png" style="width:50px;height:100px;" >

    <?php
           
            $hora= date ("h:i"); 
            $fecha= date ("j/n/Y");
             ?> 
            
             
    
       <input id="stock" required name="stock" type="text" value="<?php {{echo $hora;}} ?> --- <?php {{ echo $fecha; }} ?>" class="form-control stock" >    

  </header>
  <footer>
    <table>
    
      <tr>
        <td>
            <p class="izq">
              Comercial Santa Clarita S.A de C.V
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
  <div id="content">

<div class="widget-content nopadding">
           <table class="table table-bordered table-advance table-hover table-striped data-table" aling="center" cellspacing="10"  border="3">
              <thead style="background-color: SteelBlue ">
                <tr>
                  <th style="color: black">Código</th>
                  <th style="color: black">Nombre</th>
                  <th style="color: black">Correo</th>
                  <th style="color: black">%Telefono</th>
                 
                  
                  
                </tr>
              </thead>
              <tbody>
                @foreach($proves as $prove) 
                <tr class="gradeX">
                
                 
           <td>{{$prove->id}}</td>
           <td>{{$prove->nomProveedor}}</td>
           <td>{{$prove->EmailProveedor}}</td>
           <td>{{$prove->telProveedor}}</td>
        
                 
                  
                  
                 
                </tr>
                @endforeach

                
              </tbody>
            </table>
          </div>






  
  </div>
</body>
</html>