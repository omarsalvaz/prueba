<?php
session_start();
include('verificarDatos/config.php');
if (isset($_SESSION['email']) != "") 
    $fullName   = $_SESSION['fullName'];
	$titular   = $_SESSION['titular'];
    $email      = $_SESSION['email'];
    $idArea = $_SESSION['area'];
	$seccion = $_SESSION['seccion'];
	$fondo = $_SESSION['fondo'];
    $idUser     = $_SESSION['id'];
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="images/png" sizes="60x60" href="images/log.ico">
    <title>Inicio : <?php echo $fullName; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  </head>

  <body>
	<nav class="navbar navbar-light bg-light mb-5" style="background-color: #ffffff !important;">
	<div class="container-fluid">
		<img src="assets/images/log.png" alt="" width="140" height="140" class="d-inline-block align-text-top">
		<h2 style="color: #330000;">Ayuntamiento Municipal de Temoaya 2022-2024</h2>
		<img src="assets/images/imagotipo.png" alt="" width="300" height="100" class="d-inline-block align-text-top">
		<!--<span><a href="verificarDatos/cerrar.php" style="color: #330000;">Salir</a></span>-->
	</div>
	</nav>


		<div class="table-responsive-sm">
			<div class="row text-center">
			<div class="col-md-12 p-md-4" style="background-color: #f9f9f9;">
			<p style="color: #330000;">HOLA, BIENVENIDO <strong><?php echo $fullName; ?></strong></p>
			<p style="color: #330000;">ÁREA:  <strong><?php echo $idArea; ?></strong></p>
			<p style="color: #330000;">TITULAR:  <strong><?php echo $titular; ?></strong></p>
			<p style="color: #330000;">ÁREA:  <strong><?php echo $fondo; ?></strong></p>
			<hr>
			</div>
		</div>
	</div>
  </body>
</html>

<?php
	require 'conexion.php';	
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/fontawesome.js"></script>
		<link rel="icon" type="images/png" sizes="60x60" href="images/faviconLim.png">
		<title> Inventario General de Archivo | Temoaya</title>
		<meta name="Sistema de control interno de archivos, del departamento de Archivo municipal de Temoaya">
		<meta name="Programador" content="Omar Saldaña Vázquez">
		<meta name="Datos" content="Cel: 7228463023">


		
		
		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					"order": [[0, "asc"]],
					"language":{
						"lengthMenu": "Mostrar _MENU_ registros por pagina",
						"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "server_process_col.php"
				});	
			});
		</script>
		
	</head>
	
	<body>
		
		<div class="table-responsive-sm">
			<div class="row" style="padding: 10px">
				<h3 style="color: #330000;" class="text-center">Inventario General de Archivo</h3>
			</div>
			
			<div class="row">
				<a href="nuevo_colaborador.php" style="color: #f9f9f9; background-color: #330000; border-style:none;" class="btn btn-primary">Nuevo Registro</a>
			</div>
			
			<br>
			
			<div class="table-responsive-sm">
				<table class="display table table-bordered" id="mitabla">
					<thead>
						<tr>
							<th>Número Progresivo</th>
							<th>Fecha de Elaboración</th>
							<th>Fondo</th>
							<th>Sección</th>
							<th>Sub Sección</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->		
		<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Eliminar Registro</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		

		<div class="container">
  
	<div class="row text-center">
		<div class="col-md-12 p-md-4" style="background-color: #f9f9f9;">
		<hr>
		<span><a href="verificarDatos/cerrar.php" style="color: #330000;">Salir</a></span>
		</div>
	</div>
	</div>

	</body>
</html>	