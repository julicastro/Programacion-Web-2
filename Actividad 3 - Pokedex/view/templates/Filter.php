<?php

function showFilter()
{?>
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
					<th scope="col">Editar</th>
					<th scope="col">Eliminar</th>
				</tr>
			</thead>
			<tbody> 
			<!--Llama a los pokemons filtrados-->
				
				<?php 
				$q = "hola";
				foreach (PokedexModel::listarDatosFiltrados($q) as $fila) { ?>
					<tr>
						<td><?= $fila[0] ?></td>
						<td><?= $fila[1] ?></td>
						<td><?= $fila[2] ?></td>
						<td><?= $fila[3] ?></td>
						<td><img style="width: 100px;" src="<?php echo($fila[4]) ?>" alt="imagen"></td>
						<td><?= $fila[5] ?></td>
						<td><a class="btn btn-primary" href="editar.php?id=<?= $fila[0] ?>">Editar</a></td>
						<td><a class="btn btn-danger" href="../controladores/Pokemon.controlador.php?a=elim&id=<?= $fila[0] ?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			<a class="btn btn-primary w-50 mb-5" href="ingresar.php">Ingresar nuevo</a>
		</div>
	</div>
	
	<?php
	}
	?>