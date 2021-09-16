<?php 

    function binomioCuadradoPerfectoPow($a, $b){
        $suma = $a + $b;
        $resultado = pow($suma, 2);
        return $resultado;
    }

    function ejercicioConPow($a, $b){
        $resultado = pow($a,2) + (2*$a*$b) + pow($b,2);
        return $resultado;     
    }




?>