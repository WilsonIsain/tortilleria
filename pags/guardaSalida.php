<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
include('../conexion/conecta.php');
mysql_query("SET NAMES 'utf8'");
$nombre=$_GET["nombre"];
$turno=$_GET["turno"];
$cantidad=$_GET["cantidad"];
$tipo=$_GET["tipo"];
$fecha=$_GET["fecha"];
$fechaActual=$_GET["fechaActual"];
 if (@mysql_query("insert into salidas(id,fecha,empleado,turno,cantidad,tipo,folio,fechaTexto) values(null,'$fechaActual','$nombre','$turno','$cantidad','$tipo','','$fecha')", $conectar)==false){ 
		  echo "error".mysql_error(); 
		  }else{
			  echo "ingresado";
			  }
		  
?>
<hr>

<?php 
include('imprimeSalidas.php');
?>
</body>
</html>