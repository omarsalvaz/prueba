<?php
session_start();
include('verificarDatos/config.php');
if (isset($_SESSION['email']) != "") {
	$seccion = $_SESSION['seccion'];
	$fondo = $_SESSION['fondo'];
	$idUser     = $_SESSION['id'];
	
?>

<!--Validación de sesión, si hay sesión iniciada, se mantiene la página, sino redirije a inicio-->
<?php 
} else { ?>
<script type="text/javascript">
    location.href="verificarDatos/cerrar.php";
</script>
<?php }   
?>

<?php
	
	require 'conexion.php';

	$observaciones = $_POST['observaciones'];
	
	$sql = "INSERT INTO prueba (fondo, seccion, subseccion) SELECT fondo, seccion, nombre_area, $observaciones AS 'observaciones' FROM usuarios WHERE id_usuario ='$idUser'";
	$resultado = $mysqli->query($sql);
	$id_insert = $mysqli->insert_id;
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			
			<div class="row text-center">
				<?php if($resultado) { ?>
					<h3>REGISTRO GUARDADO</h3>
					<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
				<?php } ?>
			</div>
			<div class="row text-center">
				<a href="colaborador.php" class="btn btn-primary">Regresar</a>
				
			</div>
		</div>
	</div>
</body>
</html>
