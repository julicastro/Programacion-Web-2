<?php

    function sumatoria($numeros = array()){
        $sumaFor = 0;
        for ($i=0; $i <= sizeof($numeros); $i++) { 
            $sumaFor += $numeros[$i];

        }
        echo "El resultado usando For es: " . $sumaFor;
        echo " ";

        $sumaForEach = 0;
        foreach ($numeros as $key => $i) {
            $sumaForEach += $i;
        }

        echo "El resultado usando ForEach es: " . $sumaForEach;
        echo " ";

        $in = 0;
        $sumaWhile = 0;
        
        while ($in <= sizeof($numeros)) {
            $sumaWhile += $numeros[$in++];
   
        }

        echo "El resultado usando While es: " . $sumaWhile;
        echo " ";

    }

?>
