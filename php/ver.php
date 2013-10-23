
<center>
<?php

include ("conexion.php");

if(isset ($_GET['id'])){
	$id = $_GET['id'];
	$SQL = "SELECT * FROM contacto WHERE id = '".$id."'";
	$ejecutar_consulta = mysql_query($SQL,$conexion);
	while ($registro = mysql_fetch_array($ejecutar_consulta))
	{ 
		
	  echo "<B>ID:</B> ".$registro["id"]." </br> ";
	  echo "<B>Apellido Paterno:</B> ".$registro["ap"]." </br>  ";
	  echo "<B>Apellido Materno:</B> ".$registro["am"]." </br>  ";
	  echo "<B>Nombre:</B> ".$registro["nombre"]." </br>  ";
	  echo "<B>Domicilio:</B> ".$registro["domicilio"]." </br>  ";
	  echo "<B>Colonia:</B> ".$registro["colonia"]." </br>  ";
	  echo "<B>Municipio:</B> ".$registro["municipio"]." </br>  ";
	  echo "<B>Estado:</B> ".$registro["estado"]." </br> ";
	  echo "<B>Pais:</B> ".$registro["pais"]." </br> ";
	  echo "<B>Celular:</B> ".$registro["celular"]." </br> ";
	  echo "<B>Telefono:</B> ".$registro["telefono"]." </br></br> ";
	 
	  
	}
}
    ?>
	
	<a href="http://localhost/P4/MiPhp/PHPI/index.php"><input type="button" value="Continuar"  /></a>
	</center>
	

 

