<center>
 <?php
include ("conexion.php");

if(isset ($_GET['id'])){
	$id = $_GET['id'];
	
	
	 $SQL = "DELETE FROM contacto WHERE id = '".$id."'";

 $ejecutar_consulta = mysql_query($SQL,$conexion);
 
	echo "<h1>Datos Eliminados</h1>";

    }
    ?>
<a href="http://localhost/P4/MiPhp/PHPI/index.php"><h4><input type="button" value="Continuar"  /></h4></a>

 

</center>