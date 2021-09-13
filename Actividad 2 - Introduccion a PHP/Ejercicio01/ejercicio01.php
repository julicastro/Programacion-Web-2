<?php 

    function ifElse($color){    
        $mensaje = "";
        if($color === "verde"){
            $mensaje = "avance";
        }else if($color === "amarillo"){
            $mensaje = "precaucion";
        }else if($color === "rojo"){
            $mensaje = "pare";
        }else{
            $mensaje = "Color incorrecto";
        }
        echo $mensaje;
    }

    function ifInline($color){
        $mensaje = "";
        $color == "verde" ? $mensaje="avance" : 
        ($color="amarillo" ? $mensaje="precaucion": 
        $color="rojo" ? $mensaje="pare" : $mensaje="Incorrecto");
        echo $mensaje;
    }

    function switchFunction($color){
        $mensaje = "";
        switch($color){
            case "verde":
                $mensaje = "avance";
                break;
            case "amarillo":
                $mensaje = "precaucion";
                break;
            case "rojo":
                $mensaje = "pare";
                break;
            default:
                $mensaje = "Color incorrecto";
                break;
        }    
        echo $mensaje;
    }


?>