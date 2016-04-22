<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>tortilleria EMMANUEL</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link href="fonts/style.css" rel="stylesheet" type="text/css">
<script  src="js/jquery-1.11.0.min.js"></script>
<script language="javascript" type="text/javascript" src="js/funciones.js" ></script>
<script type="text/javascript">

		var i = 0;
		$(document).on("ready", main);

		function main(){
			var control = setInterval(pintaFilas);
			var control2=setInterval(subirFotos);
			
		}
		 function pintaFilas(){
			$(".consultas tr:odd").css("background-color", "#DCDCDC"); // filas impares
$(".consultas tr:even").css("background-color", "#F5F5F5"); // filas pares
//$(".consultas2 tr:odd").css("background-color", "#DCDCDC"); // filas impares
//$(".consultas2 tr:even").css("background-color", "#F5F5F5"); // filas pares
//$(".consultasInternas tr:odd").css("background-color", "#DCDCDC"); // filas impares
//$(".consultasInternas tr:even").css("background-color", "#F5F5F5"); // filas pares
		}
</script>		
</head>

<body onLoad="cargaPagina('salidas.php')">
  <div id="contenedor">
      <div id="cabezera">
          <div id="logo"></div>
          <div id="texto"><span>TORTILLERIA "EMMANUEL"</span></div>
          <div id="derecho">
          </div>
          <div class="separacion"><marquee>Chetumal, Quintana Roo - <?php $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
echo " ".$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ; ?></marquee></div>
          
      
      </div>
      <div id="cuerpo">
      <div id="conteMenu">
                            <ul class="menu">
                      <li><a href="javascript:cargaPagina('salidas.php')"> <span class="icon-logout"></span>SALIDAS</a>
                      
                   </li>
                         
                     <li><a href="javascript:cargaPagina('corte.php')"> <span class="icon-text2"></span>CORTE DE CAJA</a>
                      
                   </li>  
                 </ul>
            </div>
        <div id="ventana"></div>    
      </div>
  </div>
<div id="window" class="windowUnload">
        
      </div>
      
      <div id="sombra" class="sobmbraUnload"></div>   
      <div  class="oculto" id="abrir" onClick="hide()" title="Cerrar"></div>  
</body>
</html>
