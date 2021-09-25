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
    <link rel="stylesheet" href="src/css/style.css">
    <title>Introduccion a PHP</title>
</head>

<body>

    <header class="header">
        <div class="header-content">
            <div class="header-title">
                <h1>Julian Castro</h1>
            </div>
        </div>
    </header>

    <main>
        <section class="main-content">
            <div class="ejercicio-01">
                <h3>Ejercio 01</h3>
                <p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
                    “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
                    “avance” o “estado desconocido” ante un caso no esperado.
                    a) Resuelva la solución utilizando if else
                    b) Resuelva la solución utilizando if inline (return ?: )
                    c) Resuelva la solución utilizando switch
                </p>
                <div class="ejercicio-contenedor">
                    <div>
                        <p>
                            <?php
                            ifElse("verde");
                            ?>
                        </p>
                    </div>
                    <div>
                        <p>
                            <?php
                            switchFunction("amarillo");
                            ?>
                        </p>
                    </div>
                    <div>
                        <p>
                            <?php
                            ifInline("rojo");
                            ?>
                        </p>
                    </div>
                    <div>
                        <p>
                            <?php
                            ifInline("messi");
                            ?>
                        </p>
                    </div>
                </div>
            </div>


            <div class="ejercicio-02">
                <h3>Ejercicio 02</h3>
                <p>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
                    recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
                    2
                    a) Resuelva la solución utilizando la función de potencia
                    b) Resuelva la solución utilizando la fórmula desarrollada del binomio: a
                    2 + 2*a*b + b
                    2
                </p>
                <div class="ejercicio-contenedor">
                    <div>
                        <p>
                            <?php
                            echo binomioCuadradoPerfectoPow($a = 2, $b = 5);
                            ?>
                        </p>

                    </div>
                    <div>
                        <p>
                            <?php
                            echo ejercicioConPow($a = 2, $b = 3);
                            ?>
                        </p>

                    </div>
                </div>
            </div>

            <div class="ejercicio-03">
                <h3>Ejercicio 03</h3>
                <p>Cree una función llamada concatenar que reciba dos textos y devuelva ambos textos concatenados
                    como uno solo</p>
                <div class="ejercicio-contenedor">
                    <div>
                        <p>
                            <?php
                            $t1 = "Hola me llamo julian";
                            $t2 = "y vivo en Haedo";
                            concatenarTextos($t1, $t2);
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="ejercicio-04">
                <h3>Ejercicio 04</h3>
                <p>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
                    la función, el valor del parámetro haya sido incrementado en 1 (Ver pasaje de parámetros por
                    referencia)
                </p>
                <div class="ejercicio-contenedor">
                    <div>
                        <p>Resultados esperados 2 y 3 </p>
                        <p>
                            <?php
                            incrementar(2);
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="ejercicio-05">
                <h3>Ejercicio 05</h3>
                <p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
                    valores.
                    a) Resuelva la solución utilizando la estructura de control for
                    b) Resuelva la solución utilizando la estructura de control for each
                    c) Resuelva la solución utilizando la estructura de control while</p>
                <div class="ejercicio-contenedor">
                    <div>
                    <p>
                        <?php
                        $sumar = array(1, 1, 1, 1, 2);
                        sumatoria_a($sumar);
                        ?>
                        </p>
                    </div>
                    <div>
                    <p>
                        <?php
                        $sumar = array(1, 1, 1, 1, 2);
                        sumatoria_b($sumar);
                        ?>
                        </p>
                    </div>
                    <div>
                    <p>
                        <?php
                        $sumar = array(1, 1, 1, 1, 2);
                        sumatoria_c($sumar);
                        ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="ejercicio-06">
                <h3>Ejercicio 06</h3>
                <p>Cree una clase llamada NombreCompleto, la misma tendra un constructor que reciba nombre,
                    apellido y sexo por parámetro.
                    Dicha clase debe implementar el método saludoFormal() el cual debe responder “Estimado Sr
                    /Estimada Sra” según corresponda, nombre y apellido. Ej: “Estimado Sr. Facundo D’Aranno”
                    Dicha clase debe implementar también el método saludoInformal() el cual debe responder “Hola
                    Nombre”. Ej: “Hola Facundo”
                </p>
                <div class="ejercicio-contenedor">
                    <div>
                    <p>
                        <?php
                        saludoFormal("Juan", "Carlos", "m");
                        saludoInformal("Juan");
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>
</body>

<!-- div con php -->
<div>
    <?php

    ?>
</div>


</html>