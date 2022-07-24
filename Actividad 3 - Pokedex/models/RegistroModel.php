<?php

class RegistroModel
{

    function verificarSiLaCuentaExiste($username, $password){
		$con = new Conexion();
		$SQL = $con->ejecutarConsulta("SELECT * FROM usuario WHERE username = '".$username."' AND password = '".$password."'");
        if($SQL != null){
            return false;
        }
        else{
            return true;
        }
		$con->cerrarConexion();
    }

    function setUsuario($username,$password,$repitePassword,$rol){
		$con = new Conexion();
        if($password == $repitePassword) {
            if($this->verificarSiLaCuentaExiste($username,$password)){
                $con->ejecutarActualizacion("INSERT INTO `usuario` (`username`, `password`, `role`) VALUES ('$username','$password','$rol')");
            }else{
                echo "El Usuario ya se encuentra registrado.";
            }
        }
        else{
            echo "Las contraseñas no coinciden";
            //$_SESSION['errores'] = "Las contraseñas no coinciden";
        }
		$con->cerrarConexion();
    }
}

?>