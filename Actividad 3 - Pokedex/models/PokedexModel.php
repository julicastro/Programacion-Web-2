<?php
require_once '../helpers/Conexion.php';

class PokedexModel {

	public static function listarDatos () {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta('SELECT * FROM pokemon');
		$con->cerrarConexion();
		return $cont;
	}

	public static function ingresarDato ($pokemon) {
		$con = new Conexion();
		$con->ejecutarActualizacion("INSERT INTO pokemon (nombre, numero, tipo, imagen, descripcion) VALUES ('$pokemon->nombre','$pokemon->numero', '$pokemon->tipo' ,'$pokemon->imagen', '$pokemon->descripcion')");
		$con->cerrarConexion();
	}

	public static function buscarPorId ($id) {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta("SELECT * FROM pokemon WHERE id = $id");
		$con->cerrarConexion();
		return $cont[0];
	}

	public static function editarDato ($pokemon) {
		$con = new Conexion();
		$con->ejecutarActualizacion("UPDATE pokemon SET `nombre` = '$pokemon->nombre', `numero` = '$pokemon->numero', `tipo` = '$pokemon->tipo', `imagen` = '$pokemon->imagen', `descripcion` = '$pokemon->descripcion' WHERE (`id` = $pokemon->id)");
		$con->cerrarConexion();
	}

	public static function eliminarPorId ($id) {
		$con = new Conexion();
		$con->ejecutarActualizacion("DELETE FROM pokemon WHERE Id = $id");
		$con->cerrarConexion();
	}
//Lista los pokemons por lo que se pasa en buscador
	public static function listarDatosFiltrados ($q) {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta("SELECT * FROM pokemon WHERE (Id LIKE '%$q%' OR nombre LIKE '%$q%' OR tipo LIKE '%$q%' OR numero LIKE '%$q%')");
		$con->cerrarConexion();
		return $cont;
	}
}