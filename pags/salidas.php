<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>salidas</title>
</head>

<body>
<?php
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
$fechaActual=date("Y")."-". date("m")."-".date("d");
 ?>

<form action="#" method="post" id="formu" onsubmit="return false;" >
<input type="hidden" name="fecha" id="fecha" value="<?php echo $fecha; ?>">
<input type="hidden" name="fechaActual"  id="fechaActual" value="<?php echo $fechaActual; ?>">

<table style=" border-collapse: collapse;" class="consultas">
    <thead>			              
			                <tr >
			                 <th class="titulo">Empleado</th>
                             <th class="titulo">Turno</th>
                             <th class="titulo">Tipo</th>
                              <th class="titulo">Cantidad</th>
                            </tr>
			              </thead>
    <tbody>
        <tr>
            <td>
                <select id="nombre" name="nombre">
                <option>Alex</option>
                <option>Luis</option>
                <option>Dany</option>
                </select>
            </td>
            <td>
                <select id="turno" name="turno">
                <option>Mañana</option>
                <option>Tarde</option>
                
                </select>
            </td>
             <td>
                <select id="tipo" name="tipo">
                <option>Salida</option>
                <option>Frias</option>
                
                </select>
            </td>
            <td>
                <input type="number"  id="cantidad" name="cantidad" required >
            </td>
        </tr>
       
        <tr>
        <td></td>
        <td></td>
        <td><input class="boton" type="button" value="Agregar Venta" height="60" onClick="Venta()"></input></td>
        <td><input class="boton" type="image" src="imagenes/btn guardar.png" height="60" onClick="registraSalida()"></td>
        </tr>
    </tbody>
</table>  
</form>
<div id="resultado">
<?php 
include('imprimeSalidas.php');
?>
</div>                        
</body>
</html>