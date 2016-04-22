<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 

//nombreVenta=document.getElementById("nombreVenta").value;
	//cantidadVenta=document.getElementById("cantidadVenta").value;
//	clienteVenta=document.getElementById("clienteVenta").value;
	//fechaV=document.getElementById("fechaV").value;
	//fechaActualV
include('../conexion/conecta.php');
mysql_query("SET NAMES 'utf8'");
$nombre=$_GET["nombreVenta"];
$cliente=$_GET["clienteVenta"];
$cantidad=$_GET["cantidadVenta"];
$fecha=$_GET["fechaV"];
$fechaActual=$_GET["fechaActualV"];
 if (@mysql_query("insert into salidas(id,fecha,empleado,turno,cantidad,tipo,folio,fechaTexto) values(null,'$fechaActual','$nombre','','$cantidad','Venta','','$fecha')", $conectar)==false){ 
		  echo "error".mysql_error(); 
		  }else{
			  echo "ingresado";
			  }
		  	
?>
</body>
</html>