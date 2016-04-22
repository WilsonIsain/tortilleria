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
$totalAlex=0;
$totalLuis=0;
$totalDany=0;	
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
$fechaActual=date("Y")."-". date("m")."-".date("d");

?> 

<table class="consultas2" style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
<tr><td colspan="3" class="titulo2">Alex</td></tr>
<tr><td class="titulo">Mañana</td><td class="titulo">Tarde</td> <td class="titulo">Frias</td></tr>
<tr>
<td style="vertical-align:top;"><table class="consultasInternas" style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Alex' and turno='Mañana' and tipo='Salida' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalAlex=$totalAlex+$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>

</table></td>

<td style="vertical-align:top;"><table class="consultasInternas" style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Alex' and turno='Tarde' and tipo='Salida' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalAlex=$totalAlex+$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>
</table></td>

<td style="vertical-align:top;"><table class="consultasInternas" style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Alex' and tipo='Frias' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalAlex=$totalAlex-$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>
</table></td>

</tr>
<?php 
 $consulta = mysql_query("SELECT * FROM salidas where empleado='Alex' and tipo='Venta' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalAlex=$totalAlex-$fila["cantidad"];
				 ?>
                 <tr>
                 <td colspan="3" class="venta">Venta:&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
?>
<?php
$consulta = "select * from totales where empleado='Alex' and fecha='$fechaActual'";
	 $resultado = mysql_query($consulta);
	 $num_resultados = mysql_num_rows($resultado);
	 if($num_resultados>0){
		 
		 }else{
			 //ingresamos el total de alex
			 if (@mysql_query("insert into totales(id,empleado,fecha,fechaTexto,total) values(null,'Alex','$fechaActual','$fecha','','Venta','','$fecha')", $conectar)==false){ 
		  echo "error".mysql_error(); 
		  }else{
			  echo "ingresado";
			  }
			 //
			 }
?>
<tr><td colspan="3" class="total"><input type="hidden" name="totalAlex" id="totalAlex" value="<?php echo $totalAlex ?>">Total:<?php echo $totalAlex; ?></td>
</tr>

</table>


<table class="consultas2" style=" border-collapse: collapse;">
<tr><td colspan="3" class="titulo2">Dany</td></tr>
<tr><td class="titulo">Mañana</td><td class="titulo">Tarde</td> <td class="titulo">Frias</td></tr>
<tr>
<td style="vertical-align:top;"><table class="consultasInternas" style=" border-collapse: collapse;">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Dany' and turno='Mañana' and tipo='Salida' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalDany=$totalDany+$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>

</table></td>

<td style="vertical-align:top;"><table class="consultasInternas" style=" border-collapse: collapse;">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Dany' and turno='Tarde' and tipo='Salida' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalDany=$totalDany+$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>
</table></td>

<td style="vertical-align:top;"><table class="consultasInternas" style=" border-collapse: collapse;">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Dany' and tipo='Frias' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalDany=$totalDany-$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>
</table></td>

</tr>
<?php 
 $consulta = mysql_query("SELECT * FROM salidas where empleado='Dany' and tipo='Venta' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalDany=$totalDany-$fila["cantidad"];
				 ?>
                 <tr>
                 <td colspan="3" class="venta">Venta:&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
?>
<tr><input type="hidden" name="totalDany" id="totalDany" value="<?php echo $totalDany; ?>"><td colspan="3" class="total">Total:<?php echo $totalDany; ?></td></tr>

</table>


<table class="consultas2" style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
<tr><td colspan="3" class="titulo2">Luis</td></tr>
<tr><td class="titulo">Mañana</td><td class="titulo">Tarde</td> <td class="titulo">Frias</td></tr>
<tr>
<td style="vertical-align:top;"><table class="consultasInternas" style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Luis' and turno='Mañana' and tipo='Salida' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalLuis=$totalLuis+$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>

</table></td>

<td style="vertical-align:top;"><table class="consultasInternas" style=" border-collapse: collapse;" cellpadding="0" cellspacing="0">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Luis' and turno='Tarde' and tipo='Salida' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalLuis=$totalLuis+$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>
</table></td>

<td style="vertical-align:top;"><table class="consultasInternas"  cellpadding="0" cellspacing="0" style=" border-collapse: collapse;">
<?php
  
	   $consulta = mysql_query("SELECT * FROM salidas where empleado='Luis' and tipo='Frias' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalLuis=$totalLuis-$fila["cantidad"];
				 ?>
                 <tr>
                 <td>&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
	  ?>
</table></td>

</tr>
<?php 
 $consulta = mysql_query("SELECT * FROM salidas where empleado='Luis' and tipo='Venta' and fecha='$fechaActual'");
             while($fila = mysql_fetch_array($consulta)){
				 $totalLuis=$totalLuis-$fila["cantidad"];
				 ?>
                 <tr>
                 <td colspan="3" class="venta">Venta:&nbsp;<?php echo $fila["cantidad"]; ?></td>
                 </tr>
                 <?php
				 
				 	}
?>
<tr><input type="hidden" name="totalLuis" id="totalLuis" value="<?php echo $totalLuis; ?>"><td colspan="3" class="total">Total:<?php echo $totalLuis; ?></td></tr>

</table>

<div id="resultadoTotales"></div>
</body>
</html>