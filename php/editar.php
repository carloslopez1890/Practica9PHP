<?php

include ("conexion.php");

if(isset ($_GET['id'])){
	$id = $_GET['id'];
	$SQL = "SELECT * FROM contacto WHERE id = '".$id."'";
	$ejecutar_consulta = mysql_query($SQL,$conexion);
	$registro = mysql_fetch_array($ejecutar_consulta);
}
?>
	<form method="POST"  action="conexionEDITAR.php" >
	<input type="hidden" name="id" value = "<?php echo $registro['id']; ?>"/><br />
	<b>Apellido Paterno:<b> <input type="text"   name="ap" value = "<?php echo $registro['ap']; ?>"/><br />
	<b>Apellido Marerno:<b> <input type="text"   name="am" value = "<?php echo $registro['am']; ?>"/><br />
	<b>Nombre:<b> <input type="text"   name="nombre" value = "<?php echo $registro['nombre']; ?>"/><br />
	<b>Domicilio:<b> <input type="text"   name="domicilio" value = "<?php echo $registro['domicilio']; ?>"/><br />
	<b>Colonia:<b> <input type="text"   name="colonia" value = "<?php echo $registro['colonia']; ?>"/><br />
	<b>Municipio:<b> <input type="text"   name="municipio" value = "<?php echo $registro['municipio']; ?>"/><br />
	<b>Estado:<b> <input type="text"   name="estado" value = "<?php echo $registro['estado']; ?>"/><br />
	<b>Pais:<b> <input type="text"   name="pais" value = "<?php echo $registro['pais']; ?>"/><br />
	<b>Telefono:<b> <input type="text"   name="telefono" value = "<?php echo $registro['telefono']; ?>"/><br />
	<b>Celular:<b> <input type="text"   name="celular" value = "<?php echo $registro['celular']; ?>"/><br /><br />

	
	<input type="submit" name="enviar" value="EDITAR">
	</form>
 

