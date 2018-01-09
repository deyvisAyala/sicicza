 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte Proveedores</title>
  <style>
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
body {
    font-family: 'Source Sans Pro', sans-serif;
    font-weight: 300;
    font-size: 12px;
    margin: 0;
    padding: 0;
    color: #777777;
  }
table {
    border-collapse: collapse;
    width: 95%;
}


table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: white;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;
  font-weight: normal;
}

th {
    background-color: #4f8ba0;
    color: white;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #FAFBFB;
}
  section .table-wrapper {
    position: relative;
    overflow: hidden;
  }

/*tr:nth-child(even){background-color: #F0FDFF}
*/
table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}
</style>
</head>
<body>
  <div class="col-md-12">
    <div class="box-body">
      <div class="box-header with-border">
        <div style="position: absolute;left: 220px; top: 40px; z-index: 1;"><h2>Comercial Santa Clarita S.A de C.V</h2></div>
        <div style="position: absolute;left: 280px; top: 80px; z-index: 1;">CASA MATRIZ</div>
        <div style="position: absolute;left: 385px; top: 133px; z-index: 1;"><h5>Teléfono 2462-6758</h5></div>
        <div style="position: absolute;left: 120px; top: 133px; z-index: 1;"><h5>Depto. Zacatecoluca, El Salvador, C.A.</h5></div>
        <HR style="position: absolute;left: 23px; top: 163px; z-index: 1; color:blue;" width=90%>
        <div style="position: absolute;left: 550px; top: 175px; z-index: 1;">Fecha:  <?=  $date; ?> </div>
        <div style="position: absolute;left: 550px; top: 190px; z-index: 1;">Impresión:  <?=  $date1; ?> </div>
        <h3 align="right" style="position: absolute;left:20; top:20px; px; z-index: 1;"><img class="al" width="110px" height="110px" src="img/sicicza2.png" ></h3>
        <h3 align="right" style="position: absolute; left:550px; top:10px; z-index: 1;"><img class="al" width="120px" height="130px" src="img/sicicza2.png" ></h3>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div style="position: absolute;left: 230px; top: 210px; z-index: 1;"><h3>LISTADO DE CLIENTES ACTIVOS</h3></div>
        <table class="table-wrapper" >
           <thead>
            <tr>
                  <th style="color: black">Nombre</th>
                  <th style="color: black">Dui</th>
                  <th style="color: black">Nit</th>
                  <th style="color: black">Telefono</th>
                  <th style="color: black">E-mail</th>
                  <th style="color: black">Direccion</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clientes as $prove) 
            <tr>
             <td>{{$prove->nomCliente}}</td>
           <td>{{$prove->dui}}</td>
           <td>{{$prove->nit}}</td>
           <td>{{$prove->telCliente}}</td>
           <td>{{$prove->EmailCliente}}</td>
           <td>{{$prove->dirCliente}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
     </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</body>
</html>
