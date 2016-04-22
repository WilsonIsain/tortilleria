// JavaScript Document
function cargaPagina(pag){
	var xmlhttp;
	//document.getElementById("ventana").className="oculto";
			document.getElementById("ventana").className="cargado";
		  	if (window.XMLHttpRequest)
			  {
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
		  xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				 {
				 document.getElementById("ventana").innerHTML=xmlhttp.responseText;
				 }
			  }
		  xmlhttp.open("GET","pags/"+pag+"?",true);
			xmlhttp.send();
			setTimeout ('imprimeTotales()', 2000);
			
	}
function imprimeTotales(){
	totalAlex=document.getElementById("totalAlex").value;
	totalDany=document.getElementById("totalDany").value;
	totalLuis=document.getElementById("totalLuis").value;
	var xmlhttp;
	//document.getElementById("ventana").className="oculto";
			
		  	if (window.XMLHttpRequest)
			  {
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
		  xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				 {
				 document.getElementById("resultadoTotales").innerHTML=xmlhttp.responseText;
				 }
			  }
		  xmlhttp.open("GET","pags/guardaTotales.php?totalAlex="+totalAlex+"&totalDany="+totalDany+"&totalLuis="+totalLuis,true);
			xmlhttp.send();
	
	}	
function registraSalida(){
	nombre=document.getElementById("nombre").value;
	turno=document.getElementById("turno").value;
	cantidad=document.getElementById("cantidad").value;
	fecha=document.getElementById("fecha").value;
	tipo=document.getElementById("tipo").value;
	fechaActual=document.getElementById("fechaActual").value;
	if(cantidad==""){
		}else{
			var xmlhttp;
	//document.getElementById("ventana").className="oculto";
			
		  	if (window.XMLHttpRequest)
			  {
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
		  xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				 {
				 document.getElementById("resultado").innerHTML=xmlhttp.responseText;
				 }
			  }
		  xmlhttp.open("GET","pags/guardaSalida.php?nombre="+nombre+"&turno="+turno+"&cantidad="+cantidad+"&tipo="+tipo+"&fecha="+fecha+"&fechaActual="+fechaActual,true);
			xmlhttp.send();
			}
	
	}
function calculaImporte(cantidad){
	document.getElementById("importe").value=cantidad*10;
	devolucion=document.getElementById("devolucion").value;
	if(devolucion==""){
		document.getElementById("importeD").value=0;
		document.getElementById("total").value=cantidad*10;
		}else{
			devolucion=document.getElementById("devolucion").value*10;
			document.getElementById("importeD").value=devolucion;
			document.getElementById("total").value=document.getElementById("importe").value-document.getElementById("importeD").value;
			}
	}
function calculaDevolucion(cantidad){
	document.getElementById("importeD").value=cantidad*10;
	document.getElementById("total").value=document.getElementById("importe").value-document.getElementById("importeD").value;
	}
function Venta(){
	show();
		var xmlhttp;
	//document.getElementById("ventana").className="oculto";
			
		  	if (window.XMLHttpRequest)
			  {
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
		  xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				 {
				 document.getElementById("window").innerHTML=xmlhttp.responseText;
				 }
			  }
		  xmlhttp.open("GET","pags/venta.php?",true);
			xmlhttp.send();
			
	}
function hide()
		{
			document.getElementById('sombra').className='sombraUnload';
			document.getElementById('window').className='windowUnload';
			document.getElementById("abrir").className='oculto';
	
		}
function show(){		
document.getElementById('sombra').className='sombraLoad';
			document.getElementById('window').className='windowLoad';
			document.getElementById("abrir").className='cerrado';	
}
function registraVenta(){
	nombreVenta=document.getElementById("nombreVenta").value;
	cantidadVenta=document.getElementById("cantidadVenta").value;
	clienteVenta=document.getElementById("clienteVenta").value;
	fechaV=document.getElementById("fechaV").value;
	fechaActualV=document.getElementById("fechaActualV").value;
	if(cantidadVenta==""){
		}else{
			var xmlhttp;
	//document.getElementById("ventana").className="oculto";
			
		  	if (window.XMLHttpRequest)
			  {
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
		  xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				 {
				 document.getElementById("resultadoVenta").innerHTML=xmlhttp.responseText;
				 }
			  }
		  xmlhttp.open("GET","pags/guardaVenta.php?nombreVenta="+nombreVenta+"&clienteVenta="+clienteVenta+"&cantidadVenta="+cantidadVenta+"&fechaV="+fechaV+"&fechaActualV="+fechaActualV,true);
			xmlhttp.send();
			}
			cargaPagina('salidas.php');
	}