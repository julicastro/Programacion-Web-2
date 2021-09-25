<?php

    function sumatoria_a($numeros)
    {
        $total = 0;
        for ($i = 0; $i < count($numeros); $i++) {
            $total += $numeros[$i];
        }
        echo $total;
    }

    function sumatoria_b($numeros)
    {
        $total = 0;
        foreach ($numeros as $numero) {
            $total += $numero;
        }
        echo $total;
    }

    function sumatoria_c($numeros)
    {
        $total = $i = 0;
        while ($i < count($numeros)) {
            $total += $numeros[$i];
            $i++;
        }
        echo $total;
    }


$numeros = array(1, 2, 3, 4);
