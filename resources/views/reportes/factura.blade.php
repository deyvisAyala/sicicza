<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Factura</title>
<style>
.bigicon { 
    font-size: 35px;
    color: #36A0FF;
} 
thead {
     background: #ffffcc;
     

}
thead {
     background: #ffffcc;
   

}
table {
  border-collapse: collapse;
}

h2,h1,span
{
    color: #36A0FF;

}
.gris{
    background:#8c8c8c; 
    color:white;
}

table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #008080;
    color: white;
}


h2,h1,span
{
    color: #36A0FF;

}
.gris{
    background:#8c8c8c; 
    color:white;
}
.title {
 font-size: 26px;
 }
p.serif {
    font-family: "Times New Roman", Times, serif;
     font-size: 9px;
     text-align: center;
}
p.serif1 {
    font-family: "Times New Roman", Times, serif;
     font-size: 9px;
     text-align: left;
}
td.sansserif {
    font-family: Arial, Helvetica, sans-serif;
     font-size: 10px;
     text-align: left;
     
 

}
  p.borderr {
    border: 2px solid red;
    border-radius: 5px;
    font-size: 8px;
    text-align: right;
}
    p.colornf {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 8px;
    text-align: center;
    color:red;
}
</style>
</head>
<body>
<div class="col-md-12">
  <div class="box-body">
    <div class="box-header with-border">
      <table width="556" border="" align="" cellpadding="10">
        <tr>
          <td align="left" bgcolor="#E0F8E6"><?=  $date; ?></td> 
          <article><!--Aqesta el donde se muestra una descripcion-->
           <table border="0" width="330px" align="left">
       
          <tr>
          <td bgcolor="#ECF6CE">
            <p class="serif"><b>COMERCIAL SANTA CLARITA, S.A DE C.V</b></p>
             <p class="serif"><b>ACTIVIDADES DE  COMERCIALES</b></p>
             <p class="serif">Departamento DE LA PAZ, ZACATECOLUCA, El Salvador-Centroamérica  </p>
              <p class="serif">Telefono: (503) 7712-8976 * Fax: </p>
             </td>
           <td bgcolor= "#F2F5A9">
                <p class="serif">FACTURA</p>
            
                <p class="colornf">N°</p>
             
                <p class="serif">REGISTRO N° 182548-1</p>
                <p class="serif">NIT:0207-061255-001-5</p>
           </td>
           </tr>
           </table>
            </article>
          

          <td width="350" align="center" colspan="8"> </td>
          <td bgcolor="#E0F8E6">&nbsp;<?=  $date1; ?></td>
        </tr>
        
        
        
    </table>

   <br> <br> <br> <br> <br> <br>

          <article><!-- Aqui carga los datos del cua-->
            
               <table border="3" width="350px" align="right" >
          
                  <tr>
                    <td bgcolor="#ECF6CE">
                       <p class="serif1">Cliente  :   <?=  $cli->nomCliente; ?> </p>   
            
                       <p class="serif1">Dirección  :  <?=  $cli->dirCliente; ?></p>
                  </td>
                  <td bgcolor="#ECF6CE">
                       <p class="serif1">Dui  :   <?=  $cli->dui; ?></p>   
            
                       <p class="serif1">Nit  :  <?=  $cli->nit; ?> </p>
                  </td>
                </tr>
              </table>
             
         
         </article>
            
           
  </div><!-- /.box-header -->
  <br><br><br><br>
  <div class="box-body">
    <table class="table" border="1" style="width:100%" >
      <thead>
        <tr>
         <th>CANTIDAD</th>
         <th>DESCRIPCION</th>
         <th>PRECIO U.</th>
         <th>VENTAS EXENTAS</th>
         <th>VENTAS A</th>
        </tr>

      </thead>
  
      <tbody>
     

      </tbody>
      <tfoot>
        <?php
                    $suma=0;
                ?>
            @foreach($h as $prove) 
            <tr>
           <td>{{$prove->cantidad}}</td>
           <td>{{$prove->nomProducto}}</td>
           <td>{{$prove->precio}}</td>
           <td>-------</td>
           <td>
            <?php
                                                           
                                                            $a=($prove->cantidad*$prove->precio);
                                                           $suma=$suma+$a;
                                                            echo $a;
                                                            ?>
          </td>

            </tr>
          @endforeach
           <tr align="right">
              <td colspan="2" rowspan="1"><p class="serif">

                <?php
                $suma=$suma+0.01;
                  $f=new
                  \NumberFormatter("es",
                  \NumberFormatter::SPELLOUT);
                  $cadena=$f->format(floor($suma));
                  $decimales=explode('.',$suma);

                  echo "El total a pagar es: ".$cadena." ".$decimales[1]." /100";
            ?>
               </p></td>


            <td colspan="3" rowspan="2">
              
            <?php
                  $iva=$suma*0.13;
                  $subTot=$suma-($suma*0.13);
             ?>
            
            <p class="serif">Iva:--------------------------$<?php  echo $iva;?></p>
            <p class="serif">Sub-Total:--------------------$<?php  echo $subTot;?></p>
            <p class="serif">(-)Iva-Retenida:--------------$00.00</p>
            <p class="serif">Ventas Extensas:--------------$00.00</p>
            <p class="serif">Ventas Total:-----------------$<?php  echo $suma;?></p>
            </td>
             </tr>
            
             <tr align="right">
             <td></td>
             <td></td>
             </tr>
              
      </tfoot>
    </table>

           
           <p></p>
  </div><!-- /.box-body -->
</div><!-- /.box -->


</div>



</body>
</html>
