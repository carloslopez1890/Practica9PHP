<CENTER>
<?php
   include ("conexion.php");
 
     if(isset ( $_POST['id']) ){
		 $id = $_POST['id'];
		 $ap = $_POST['ap'];
		 $am = $_POST['am'];
		 $nom = $_POST['nombre'];
		 $dom = $_POST['domicilio'];
		 $col = $_POST['colonia'];
		 $mun = $_POST['municipio'];
		 $est = $_POST['estado'];
		 $pai = $_POST['pais'];
		 $tel = $_POST['telefono'];
		 $cel = $_POST['celular'];
		 
		 $SQL = "UPDATE contacto  SET 
		 ap = '$ap',
		 am = '$am',
		 nombre = '$nom',
		 domicilio = '$dom',
		 colonia = '$col',
		 municipio = '$mun',
		 estado = '$est',
		 pais = '$pai',
		 telefono = '$tel',
		 celular = '$cel'
		 WHERE  id = '$id'";
		 
		 $ejecutar_consulta = mysql_query($SQL,$conexion);
		 echo "<H1>Datos Editados Correctamente</H1>";
    }else{

     echo "<H1>No Se Pudo Editar</H1>";

}
  
 ?>
<a href="http://localhost/P4/MiPhp/PHPI/index.php"><input type="button" value="Continuar"  /></a>
	</center>


		
 
 
         