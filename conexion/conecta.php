<?php
//1. Crear conexión a la Base de Datos
if(!($conectar=mysql_connect("localhost","root","")))
	{
		echo "Error al conectar  a la base de datos.". mysql_error();
	}else{
		echo "";
	}
	
	if(!mysql_select_db("tortilleria",$conectar))
	{
		echo "Error al seleccionar la base de datos";
	}
?>