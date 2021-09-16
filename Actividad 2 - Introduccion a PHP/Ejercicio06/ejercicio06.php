<?php
    
    function saludoFormal($nombre, $apellido, $sexo){
        
        if($sexo === "m"){
            $mensaje = "Hola Sr " . $nombre . " " . $apellido . ". ";
        }else if($sexo === "f"){
            $mensaje = "Hola Sra " . $nombre . " " . $apellido . ". ";
        }else{
            $mensaje = "Incorrecto";
        }

        echo $mensaje;

    }

    function saludoInformal($nombre){
        $mensaje = "Hola " . " " . $nombre . ". ";
        echo $mensaje;
    }

?>
