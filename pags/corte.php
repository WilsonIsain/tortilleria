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
?>
<br>
<form action="#" method="post" id="formu" onsubmit="return false;" >
<table style=" border-collapse: collapse;" class="consultas">
    <thead>			              
			                <tr >
			                 <th class="titulo">Empleado</th>
                             <th class="titulo">Cliente</th>
                             <th class="titulo">Cantidad</th>
                             <th class="titulo">Importe</th>
                             <th class="titulo">Devolución</th>
                             <th class="titulo">Impt. Dev.</th>
                             <th class="titulo">Total</th>
                             
			                </tr>
			              </thead>
    <tbody>
     <tr> <td>
                <select id="empleado" name="empleado">
                 <?php 
	   $consulta = mysql_query("SELECT * FROM empleados");
             while($fila = mysql_fetch_array($consulta)){
				
				 ?>
                 <option><?php echo $fila["nombre"]; ?></option>
                 
                 
                
                 
                 <?php
				 
				 	}
	  ?>
                
                </select>
            </td>
            <td><input type="text" name="cliente" id="cliente" required></td>
              <td>
                <input type="number"  id="cantidad" name="cantidad" required onKeyUp="calculaImporte(this.value)" >
            </td>
            <td>
                <input type="number"  id="importe" name="importe" readonly="readonly"  >
            </td>
            <td>
                <input type="number"  id="devolucion" name="devolucion" required  onKeyUp="calculaDevolucion(this.value)">
            </td>
            <td>
                <input type="number"  id="importeD" name="importeD" readonly="readonly" >
            </td>
            <td>
                <input type="number"  id="total" name="total" readonly="readonly" >
            </td>
            
            </tr>
            <tr>
        <td colspan="2"></td>
        <td colspan="3"></td>
        
        <td colspan="2"><input class="boton" type="image"  src="imagenes/guardar.png" height="60" onClick="registraSalida()"></td>
        </tr>
    </tbody>
</table> 
</form> 
</body>
</html>