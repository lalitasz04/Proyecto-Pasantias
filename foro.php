<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="estilos.css">
	</head>
 
	<body>
		<div>
			<section>
<!-- Agregar fotos -->
			<section class="Form">
				<h2>Agregrar fotos</h2>

				<form action="insertar_fotos.php" method="POST">
					<div>
						<label> Descripcion: </label>
						<input type="varchar" name="descripcion" placeholder=" Campo obligatorio" required>
					</div>
					<div>
						<label> Url_foto: </label>
						<input type="varchar" name="url_foto" placeholder=" Campo obligatorio" required>
					</div>
					<div>
						<button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
					</div>
				</form>
			</section>
		<!-- Agregar fotos -->


		<!-- Borrar fotos -->
			<section>
				<?php
				$conexion = mysqli_connect("localhost","root","","clase1");
				$consulta_foto = mysqli_query($conexion, "SELECT * FROM FotosPersonales");
				while ($lista_foto = mysqli_fetch_assoc($consulta_foto)){
				?>

				<div>
					<h1> Descripcion: <?php echo $lista_foto["descripcion"]; ?> </h1>
					<img src="<?php echo $lista_foto['url_foto'];?>">
				</div>

				<?php }

					if (isset($_POST['id_foto'])) {
					$id_foto = $_POST['id_foto'];

					// Eliminar el dato con el ID proporcionado
					$sql = "DELETE FROM FotosPersonales WHERE id_foto = $id_foto";
					}
				?>
			</section>

			<section>
				<h2>Eliminar datos</h2>
				<form method="post">
					<input type="text" name="id_foto" placeholder="ID del dato">
					<input type="submit" name="submit" value="Borrar">
				</form>
			</section>
		<!-- Borrar fotos -->

		</section> 
	</div>

</body>
</html>