<?php

class LoginModel
{

    public function getUsuario($username,$password){
        $con = new Conexion();
		$usuario = $con->ejecutarConsulta("SELECT * FROM usuario WHERE username = '".$username."' AND password = '".$password."'");
		$con->cerrarConexion();
		return $usuario;
    }

    public function obtenerRolDeUsuario($username){
        $con = new Conexion();
        $con->ejecutarConsulta("SELECT rol FROM usuario WHERE username like '$username'");
		$con->cerrarConexion();
    }

    public function verificarLoginCorrecto($username,$password){
        $con = new Conexion();
		$usuario = $con->ejecutarConsulta("SELECT * FROM usuario WHERE username = '".$username."' AND password = '".$password."'");
        if($usuario != null){
            return true;
        }else {
            return false;
        }
		$con->cerrarConexion();

    }


}

?>