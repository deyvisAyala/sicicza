
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ticked</title>
</head>
<body>

  <table border="1" width="200" style="border: 1px solid black;" >
    <tr >
        <th colspan="3" >
           <div align="center" ><h3>Comercial Santa Clarita</h3>
                  Fecha: {{ $cuo->fecha }}
            </div>
        </th>
    </tr>
    <tr>
        <th>Cliente: </th>
        <th colspan="2"> {{ $cli2->nomCliente }}</th>

    </tr>
      <tr>
       <th>Detalle</th>
       <th colspan="2">Pago de de cuota por venta al credito<</th>
     </tr>
    
      
          <tr>
          <th colspan="2">Numero de cuota:</th>
        <th><div align="right" >#{{ $con }} </div></th>
        <br>
     </tr>

          <tr>
          <th colspan="2">Monto por cuota:</th>
        <th><div align="right" >${{ $cuo->monto}} </div></th>
     </tr>
     <tr>
        
        <th colspan="2">Mora:</th>
        <th><div align="right" >${{ $cuo->mora}} </div></th>
     </tr>
  
        

    <tr><th></th>
    <th></th>
    <th></th></tr>
    

      <tr>
        <th colspan="2">Total:</th>
        <th><div align="right" >$ {{ $cuo->total}} </div></th>
      </tr>
      <tr><th></th>
    <th></th>
    <th></th></tr>
      <tr >
        <th colspan="3" >
           <div ><h3>F._______________ Sello.</h3>
                  
            </div>
        </th>
    </tr>
    
  </table>
 
      
</body>
</html>
