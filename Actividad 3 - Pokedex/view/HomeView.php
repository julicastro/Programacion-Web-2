<?php

require_once '../dao/Pokemon.dao.php';
require_once '../templates/header.php';
require_once '../templates/nav.php';


?>
<!DOCTYPE html>
<html lang="es">

<?php
// showHead();
?>


<body style="background: #d2c575;font-family: cursive;" style="text-align: -webkit-center;">

	<div style="background: #d2c575;font-family: cursive;" style="text-align: -webkit-center;" class="container my-5">
		<div class="container-fluid">
			<form action="user.php" class="d-flex" method="post" enctype="multipart-form-data">
				<input class="form-control me-2" type="text" placeholder="Ingrese su nombre de usuario" name="usuario">
				<input class="form-control me-2" type="text" placeholder="Ingrese su contraseña" name="password">
				<button class="btn btn-outline-success" type="submit">Ingresar</button>
			</form>
		</div>
	</div>

	<div style="width: 90%" class="m-auto">

		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Numero</th>
					<th scope="col">Tipo</th>
					<th scope="col">Imagen</th>
					<th scope="col">Descripcion</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach (PokemonDAO::listarDatos() as $fila) { ?>
					<tr>
						<td><?= $fila[0] ?></td>
						<td><a href="infoPokemon.php?id=<?= $fila[0] ?>"><?= $fila[1] ?></a></td>
						<td><?= $fila[2] ?></td>
						<!--Al ser Tipo un JOIN con la tabla de pokemon, hay q crear un metodo que de el nombre en la tabla TIPO y no en la tabla POKEMON-->
						<td><?= $fila[3] ?></td>
						<td><img style="width: 100px;" src="<?php echo ($fila[4]) ?>" alt="imagen"></td>
						<td><?= $fila[5] ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>



</body>

</html>