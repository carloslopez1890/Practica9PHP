<html>
 <head>  
<h1>DATOS USUARIO</h1> 
<link href = "css/tabla.css" rel = "stylesheet"  />
 </head>
 
 <body>      
 
<table border="8" cellpadding = "2" cellspacing = "2">

 <?php
 $conexion = mysql_connect("localhost","root","");
 mysql_select_db("directorio");
 $consulta = "SELECT * FROM contacto";
 
 $ejecutar_consulta = mysql_query($consulta,$conexion);
 
 echo "<tr> <th>ID</th>
            <th>APELLIDO PATERNO</th>
			<th>APELLIDO MATERN</th>
			<th>NOMBRE</th>
			<th>DOMICILIO</th>
			<th>COLONIA</th>
			<th>MUNICIPIO</th>
			<th>ESTADO</th>
			<th>PAIS</th>
			<th>TELEFONO</th>
			<th>CELULAR</th>
			<th>OPCIONES</th> 
 <tr>";
 

 while ($registro = mysql_fetch_array($ejecutar_consulta))
 { 


 
  echo "<tr>";
      echo "<td>".$registro["id"]." </td> ";
	  echo "<td>".$registro["ap"]." </td>  ";
	  echo "<td>".$registro["am"]." </td>  ";
	  echo "<td>".$registro["nombre"]." </td>  ";
	  echo "<td>".$registro["domicilio"]." </td>  ";
	  echo "<td>".$registro["colonia"]." </td>  ";
	  echo "<td>".$registro["municipio"]." </td>  ";
	  echo "<td>".$registro["estado"]." </td> ";
	  echo "<td>".$registro["pais"]." </td> ";
	  echo "<td>".$registro["telefono"]." </td> ";
	  echo "<td>".$registro["celular"]." </td> ";
	  echo '<td>
			<a href="php/ver.php?id='.$registro["id"].'" ><input type="button" value="Ver"/></a>
			<a href="php/editar.php?id='.$registro["id"].'" ><input type="button" value="Editar"/></a>
			<a href="php/eliminar.php?id='.$registro["id"].'" ><input type="button" value="Eliminar"/></a>
	       </td>';	  
 echo "</tr>";
 
 
 
   


 
 }
 ?>
 
 </table>
 </body>                                                                 
 </html>