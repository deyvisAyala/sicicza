
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte Proveedores</title>
  <style>
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
        <div style="position: absolute;left: 280px; top: 80px; z-index: 1;">CIUDAD CENTENARIA</div>
        <div style="position: absolute;left: 350px; top: 120px; z-index: 1;"><h5>Despacho Alcalde Telefax 2362-6700</h5></div>
        <div style="position: absolute;left: 385px; top: 133px; z-index: 1;"><h5>Gerencia Teléfono 2362-6708</h5></div>
        <div style="position: absolute;left: 120px; top: 133px; z-index: 1;"><h5>Depto. Zacatecoluca, El Salvador, C.A.</h5></div>
        <HR style="position: absolute;left: 23px; top: 163px; z-index: 1; color:blue;" width=90%>
        <div style="position: absolute;left: 550px; top: 175px; z-index: 1;">Fecha:  <?=  $date; ?> </div>
        <div style="position: absolute;left: 550px; top: 190px; z-index: 1;">Impresión:  <?=  $date1; ?> </div>
        <h3 align="right" style="position: absolute;left:20; top:20px; px; z-index: 1;"><img class="al" width="110px" height="110px" src="img/sicicza2.png" ></h3>
        <h3 align="right" style="position: absolute; left:550px; top:10px; z-index: 1;"><img class="al" width="120px" height="130px" src="img/sicicza2.png" ></h3>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div><!-- /.box-header -->
      @foreach($clientes as $prove)
      <div class="box-body">
        <div style="position: absolute;left: 230px; top: 210px; z-index: 1;" ><h3>{{ $prove->nomCliente }}</h3></div>
        <table class="table-wrapper" >
           <thead>
            <tr>
                  <th style="color: black">Nombre Familiar</th>
                  <th style="color: black">Telefono F</th>
                  <th style="color: black">Direccion F</th>
                  <th style="color: black">Nombre Personal</th>
                  <th style="color: black">Telefono P</th>
                  <th style="color: black">Direccion P</th>
            </tr>
          </thead>
          <tbody>
             
            <tr>
             <td>{{$prove->nomFamiliar}}</td>
           <td>{{$prove->telFamiliar}}</td>
           <td>{{$prove->dirFamiliar}}</td>
           <td>{{$prove->nomPersonal}}</td>
           <td>{{$prove->telPersonal}}</td>
           <td>{{$prove->dirPersonal}}</td>
            </tr>
            <br><br><br>
         
        </tbody>
      </table>
     </div><!-- /.box-body -->
      @endforeach
    </div><!-- /.box -->
  </div>
</body>
</html>
