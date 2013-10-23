
<center>
 <?php
 
 include ("conexion.php");
 
     if(
	    isset ( $_POST['ap']) && !empty ( $_POST['ap']) &&
		isset ( $_POST['am']) && !empty ( $_POST['am']) &&
		isset ( $_POST['nombre']) && !empty ( $_POST['nombre'])&&
		isset ( $_POST['domicilio']) && !empty ( $_POST['domicilio'])&&
		isset ( $_POST['colonia']) && !empty ( $_POST['colonia'])&&
		isset ( $_POST['municipio']) && !empty ( $_POST['municipio'])&&
		isset ( $_POST['estado']) && !empty ( $_POST['estado'])&&
		isset ( $_POST['pais']) && !empty ( $_POST['pais'])&&
		isset ( $_POST['telefono']) && !empty ( $_POST['telefono'])&&
		isset ( $_POST['celular']) && !empty ( $_POST['celular']))
		{
    
	
 
 
 $SQL = "INSERT INTO 
	contacto 
	(ap,
	am,
	nombre,
	domicilio,
	colonia,
	municipio,
	estado,
	pais,
	telefono,
	celular) 
	VALUES 
	('".$_POST["ap"]."',
	'".$_POST["am"]."',
	'".$_POST["nombre"]."',
	'".$_POST["domicilio"]."',
	'".$_POST["colonia"]."',
	'".$_POST["municipio"]."',
	'".$_POST["estado"]."',
	'".$_POST["pais"]."',
	'".$_POST["telefono"]."',
	'".$_POST["celular"]."')";
 
 $ejecutar_consulta = mysql_query($SQL,$conexion) or die(mysql_error());
 
 echo "<h1>Gracias hemos recibido sus Datos</h1>";
}else{

echo "<h1>Tienes Que LLenar Todos Los Campos</h1>";

}
 
 
 
 ?>
 
<a href="http://localhost/P4/MiPhp/PHPI/index.php"><input type="button" value="Continuar"  /></a>
</center>