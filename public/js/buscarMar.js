$('#buscar').on('change',function(e)
{
	var producto=$('#cargar');
	var marca=$('#buscar').find('option:selected');
	var ruta="/sicicza/public/buscarMarca/"+marca.val();
	$.get(ruta,function(res){
	producto.empty();
	
	producto.append("<option value='0'>Selecione</option>");
	$(res).each(function(key,value){
		producto.append("<option value="+value.id+">"+value.nomProducto+"</option>");
	});
	});

});

$('#cargar').on('change',function(e)
{
	//var producto=$('#cargar');
	var prod=$('#cargar').find('option:selected');
	var ruta="/sicicza/public/llenarProducto/"+prod.val();
	$.get(ruta,function(res){
	//producto.empty();
	var precioventa=0;
	var precioventa2=0;
	$(res).each(function(key,value){
		$("#idProveedor").val(value.nomProveedor);
		precioventa=(parseFloat(value.cPromedio) * (parseFloat(value.preProducto) / 100));
		precioventa2=(parseFloat(precioventa)+(parseFloat(value.cPromedio)));
		$("#preUnitario").val(precioventa2);

	});
	});

});

$('#idcliente').on('change',function(e)
{
	//var producto=$('#cargar');
	var cli=$("#idcliente").val()
	
	var ruta="/sicicza/public/capCre/"+cli;
	$.get(ruta,function(res){
	//producto.empty();
	var cap=0;

	$(res).each(function(key,value){
		$("#cap").val(value.ingreso);
		$("#clien").val(value.nomCliente);
		$("#auxcli").val(value.id);
		
		 var max=parseFloat($("#cuotas").val());
		
		  
		 if(max>value.ingreso)
            {
            	v=document.getElementById('vender');
            	v.disabled = true;
            }
            else{
                
                v=document.getElementById('vender');
            	v.disabled = false;
            }
		


	});
	});

});

$('#prima').on('change',function(e)
{
	//var producto=$('#cargar');
	
	
	
	//producto.empty();
	var c=$("#cap").val();
	var precioventa=$("#monto").val();
	var w=$("#prima").val();
	$("#total").val(precioventa);
      
          if(parseFloat(w)>parseFloat(precioventa)){
        $("#prima").val(precioventa);
    }
      if(parseFloat(w)<0){
        $("#prima").val(0);
    }
	if(w.length==0 )
    {
    	$("#prima").val(0);
        $("#total").val(precioventa);
        $("#prima").val(0);
	}
	else{	

		$("#total").val(($("#total").val()) -($("#prima").val()));
		
		}

		var cantCuotas=$('#formap').find('option:selected');
		
		 var x=parseFloat(($("#total").val()/cantCuotas.val())+(($("#total").val()/cantCuotas.val())*0.25));
		 $("#cuotas").val(x.toFixed(2));

		
		 var max=parseFloat($("#cuotas").val());
		
		  
		 if(max>c)
            {
            	v=document.getElementById('vender');
            	v.disabled = true;
            }
            else{
                
                v=document.getElementById('vender');
            	v.disabled = false;
            }

});
$('#formap').on('change',function(e)
{
	//var producto=$('#cargar');
	var cantCuotas=$('#formap').find('option:selected');
	var x=parseFloat(($("#total").val()/cantCuotas.val())+(($("#total").val()/cantCuotas.val())*0.25));
		 $("#cuotas").val(x.toFixed(2));
	
		var c=$("#cap").val();
		 var max=parseFloat($("#cuotas").val());
		
		  
		 if(max>c)
            {
            	v=document.getElementById('vender');
            	v.disabled = true;
            }
            else{
                
                v=document.getElementById('vender');
            	v.disabled = false;
            }
		



});

$('#telefono').on('change',function(e)
{
    //var producto=$('#cargar');
    
    
    
    //producto.empty();
    var cant=$("#telefono").val();
    var pre=$("#preUnitario").val();
    var total=cant*pre;
    $("#nit").val(total.toFixed(2));


});


/*$('#modal-body').on('change','#prima',function (){
//document.getElementById('prima').addEventListener('input', function()//aqui se ejecuta cuando el usuario digita le muestra la cantidad.. de producto disponible..
 
    //var c=event.target;
    c=parseFloat($("#prima").val());

    y=parseFloat($("#cx").val());
    w=$("#prima").val();
    $("#total").val(y);
    monto=parseFloat($("#min").val());
    if(isNaN(w))
    {

        $("#prima").val(0);
        $("#total").val(y);
        $("#prima").val(0);

        
        var posicion=document.getElementById('formap').options.selectedIndex; //posicion
          var j=parseFloat(document.getElementById('formap').options[posicion].text); //valor
             x=parseFloat($("#total").val()/j)+(($("#total").val()/j)*0.25);
            $("#cuotas").val(x.toFixed(2));
             max=parseFloat($("#cuotas").val());
        
            if(max>monto)
            {

   document.frm2.vender.disabled = true;

            }
            else{
                
                document.frm2.vender.disabled = false;
            }
    }
    else 
        {
            if(c<=0)
            {

                
                $("#total").val(y);
                $("#prima").val(0);
                var posicion=document.getElementById('formap').options.selectedIndex; //posicion
          var j=parseFloat(document.getElementById('formap').options[posicion].text); //valor
             x=parseFloat($("#total").val()/j)+(($("#total").val()/j)*0.25);
            $("#cuotas").val(x.toFixed(2));
             max=parseFloat($("#cuotas").val());
        
            if(max>monto)
            {
                document.frm2.vender.disabled = true;

            }
            else{
               
                document.frm2.vender.disabled = false;
            }

               
    
            }
            else if(y<c){
                $("#total").val(y);
                 $("#prima").val(0);
                var posicion=document.getElementById('formap').options.selectedIndex; //posicion
          var j=parseFloat(document.getElementById('formap').options[posicion].text); //valor
             x=parseFloat($("#total").val()/j)+(($("#total").val()/j)*0.25);
            $("#cuotas").val(x.toFixed(2));
            max=parseFloat($("#cuotas").val());
        
            if(max>monto)
            {
                document.frm2.vender.disabled = true;

            }
            else{
                
                document.frm2.vender.disabled = false;
            }

            }
            else if(y>=c){
              //  $("#prima").val(0);
                x=$("#total").val();
            
                    x=(y-c);
                    //x=round(x,2);
                    $("#total").val(x.toFixed(2));
                     var posicion=document.getElementById('formap').options.selectedIndex; //posicion
          var j=parseFloat(document.getElementById('formap').options[posicion].text); //valor
             x=parseFloat($("#total").val()/j)+(($("#total").val()/j)*0.25);
            $("#cuotas").val(x.toFixed(2));
             max=parseFloat($("#cuotas").val());
        
            if(max>monto)
            {
                document.frm2.vender.disabled = true;

            }
            else{
                
                document.frm2.vender.disabled = false;
            }

                     
    
                }else{
                     y=$("#cx").val();
                    $("#total").val(y);
                    $("#prima").val(0);
                   var posicion=document.getElementById('formap').options.selectedIndex; //posicion
          var j=parseFloat(document.getElementById('formap').options[posicion].text); //valor
             x=parseFloat($("#total").val()/j)+(($("#total").val()/j)*0.25);
            $("#cuotas").val(x.toFixed(2));
            max=parseFloat($("#cuotas").val());
        
            if(max>monto)
            {
                document.frm2.vender.disabled = true;

            }
            else{
               
                document.frm2.vender.disabled = false;
            }


                }
            
        }
});*/