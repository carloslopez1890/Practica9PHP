<?php
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];
switch($op)
{
    case "alta":
	      $contenido = "php/alta.php";
		  $titulo = "Alta";
	      break;
		  
	case "baja":
	      $contenido = "php/baja.php";
		  $titulo = "Baja";
	      break;
		  
    case "cambios":
	      $contenido = "php/cambios.php";
		  $titulo = "Cambios";
	      break;
		  
	case "consultas":
	      $contenido = "php/consultas.php";
		  $titulo = "Consultas";
	      break;
		  
	default:
          $contenido ="php/tabla.php";
          $titulo = "tabla";
          break;		  


}

?>


<!DOCTYPE html>
<html lang = "es">
 <head>
       <meta charset = "utf-8"/>
       <title><?php echo $titulo;?></title>
	   <link href = "css/" rel = "stylesheet"  />
	   <link href =  "ico/dango.ico"        rel = "shortcut icon" />
	   <script src = "js/mis-contactos.js"></script>
 </head>
       <body background="imagenes/img.jpg">
	         <section id = "contenido">
			    <nav>
			        <ul>
					   <li><a class="cambio" href="index.php">VER TABLA DE DATOS</a></li>
					   <li><a class="cambio" href="?op=alta">REGITRAR</a></li>
					  
					 </ul>
				</nav>
				<section id = "principal">
				<?php include($contenido);?>
				</section>
			</section>
       </body>                                                                 
 </html>