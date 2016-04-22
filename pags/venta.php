<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>venta</title>
</head>

<body>
<?php
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
$fechaActual=date("Y")."-". date("m")."-".date("d");
 ?>
<form action="#" method="post" id="formu" onsubmit="return false;" >
<input type="hidden" name="fechaV" id="fechaV" value="<?php echo $fecha; ?>">
<input type="hidden" name="fechaActualV"  id="fechaActualV" value="<?php echo $fechaActual; ?>">
<br>
<table style=" border-collapse: collapse;" class="consultas">
    <thead>			              
			                <tr >
			                 <th class="titulo">Empleado</th>
                             <th class="titulo">cliente</th>
                             <th class="titulo">Cantidad</th>
                            </tr>
			              </thead>
    <tbody>
        <tr>
            <td>
                <select id="nombreVenta" name="nombreVenta">
                <option>Alex</option>
                <option>Luis</option>
                <option>Dany</option>
                </select>
            </td>
            <td>
                <select id="clienteVenta" name="clienteVenta">
                <option>Mañana</option>
                <option>Tarde</option>
                
                </select>
            </td>
             
            <td>
                <input type="number"  id="cantidadVenta" name="cantidadVenta" required >
            </td>
        </tr>
       
        <tr>
        <td></td>
      
        <td></td>
        <td><input class="boton" type="image" src="imagenes/btn guardar.png" height="60" onClick="registraVenta()"></td>
        </tr>
    </tbody>
</table>  
</form>
<br>

<div id="resultadoVenta"></div>
</body>
</html>