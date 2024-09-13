<?php
session_start();
include('verificarDatos/config.php');
if (isset($_SESSION['email']) != "") {
	$fullName   = $_SESSION['fullName'];
	$titular   = $_SESSION['titular'];
    $email      = $_SESSION['email'];
    $idArea = $_SESSION['area'];
	$seccion = $_SESSION['seccion'];
	$fondo = $_SESSION['fondo'];
    $idUser     = $_SESSION['id'];
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="icon" type="images/png" sizes="60x60" href="images/log.ico">
		<title> Nuevo Registro | Inventario General de Archivo | Temoaya</title>
		<meta name="Sistema de control interno de archivos, del departamento de Archivo municipal de Temoaya">
		<meta name="Programador" content="Omar Saldaña Vázquez">
		<meta name="Datos" content="Cel: 7228463023">	
	</head>
	
	<body>
		<div class="container" style="padding-top:15px">
			<div class="row">
				<h3>NUEVO REGISTRO</h3>
			</div>
			
			
			<form method="POST" action="guardar_col.php" enctype="multipart/form-data" autocomplete="off">
				
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="fondo">Fondo</label>
						<input type="text" class="form-control"   value ="<?php echo $fondo; ?>" disabled>
					</div>
					<div class="form-group col-md-6">
						<label for="seccion">Sección</label>
						<input type="text" class="form-control" id="seccion" name="seccion" value ="<?php echo $seccion; ?>" disabled>
					</div>
				</div>
				

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="subseccion">Sub-Sección</label>
						<input type="text" class="form-control" id="subseccion" name="subseccion" value ="<?php echo $idArea; ?>" disabled>
					</div>
					<div class="form-group col-md-6">
						<label for="observaciones">Observaciones</label>
						<input type="text" class="form-control" id="observaciones" name="observaciones">
					</div>					
				</div>
				<br />
				
				<div class="form-group" style="padding-top:15px">
					<a href="colaborador.php" class="btn btn-primary">Regresar</a>
					<button type="submit" class="btn btn-success">Guardar</button>
					
				</div>
			</form>
		</div>
	</body>
</html>				

<!--Validación de sesión, si hay sesión iniciada, se mantiene la página, sino redirije a inicio-->
<?php 
} else { ?>
<script type="text/javascript">
    location.href="verificarDatos/cerrar.php";
</script>
<?php }   
?>