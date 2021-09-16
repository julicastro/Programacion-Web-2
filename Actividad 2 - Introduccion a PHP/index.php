<?php
include_once('Ejercicio01/ejercicio01.php');
include_once('Ejercicio02/ejercicio02.php');
include_once('Ejercicio03/ejercicio03.php');
include_once('Ejercicio04/ejercicio04.php');
include_once('Ejercicio05/ejercicio05.php');
include_once('Ejercicio06/ejercicio06.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion a PHP</title>
</head>

<body>
    <header>
        <h1>Julian Castro</h1>
    </header>
    <main>

    
    <div class="ejercicio-01">
        <h3>Ejercio 01</h3>
        <div>
            <?php
            ifElse("verde");
            ?>
        </div>
        <div>
            <?php
            switchFunction("amarillo");
            ?>
        </div>
        <div>
            <?php
            ifInline("rojo");
            ?>
        </div>
        <div>
            <?php
            ifInline("messi");
            ?>
        </div>
    </div>

    <div class="ejercicio-02">
        <h3>Ejercicio 02</h3>
        <div>
            <?php
            echo binomioCuadradoPerfectoPow($a = 2, $b = 5);
            ?>
        </div>
        <div>
            <?php
            echo ejercicioConPow($a = 2, $b = 3);
            ?>
        </div>
    </div>

    <div class="ejercicio-03">
        <h3>Ejercicio 03</h3>
        <div>
            <?php
                $t1 = "Hola me llamo julian";
                $t2 = "y vivo en Haedo";
                concatenarTextos($t1, $t2);
            ?>
        </div>
    </div>

    <div class="ejercicio-04">
        <h3>Ejercicio 04</h3>
        <div>
            <p>Resultados esperados 2 y 3 </p>
            <?php
                incrementar(2);
            ?>
        </div>
    </div>

    <div class="ejercicio-05">
        <h3>Ejercicio 05</h3>
        <div>
            <?php
                $sumar = array(1,1,1,1,2);
                sumatoria($sumar);
            ?>
        </div>
    </div>

    <div class="ejercicio-06">
        <h3>Ejercicio 06</h3>
        <div>
            <?php
                saludoFormal("Juan", "Carlos", "m");
                saludoInformal("Juan");
            ?>
        </div>
    </div>
    </main>
</body>

<!-- div con php -->
<div>
    <?php
        
    ?>
</div>


</html>