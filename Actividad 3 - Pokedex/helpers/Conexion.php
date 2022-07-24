<?php
class Conexion
{
    private $servidor;
    private $usuario;
    private $clave;
    private $base;
    private $conexion;

    function dbConnect()
    {
        $conn =    null;
        $servidor = 'localhost';
        $base =     'db_pokedex';
        $usuario = 'root';
        $clave =     'root';
        try {
            $conn = new PDO('mysql:servidor=' . $servidor . ';db_pokedex=' . $base, $usuario, $clave);
        } catch (PDOException $e) {
            echo '<p>Error al conectar a la base de datos</p>';
            exit;
        }
        return $conn;
    }

    public function __construct()
    {
        $this->servidor = 'localhost';
        $this->usuario = 'root';
        $this->clave = 'root';
        $this->base = 'db_pokedex';

        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->base);
    }


    public function ejecutarConsulta($sql)
    {
        $contenedor = $this->conexion->query($sql);
        return $contenedor->fetch_all();
    }

    public function ejecutarActualizacion($sql)
    {
        $this->conexion->query($sql);
    }

    public function cerrarConexion()
    {
        $this->conexion->close();
    }
}
