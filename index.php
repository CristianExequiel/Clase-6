<?php

//Clase 6
//Ejercicio N°1
/* teoría: factorial de 8=8*7*6*5*4*3*2*1=40320 */

//defino primero el numero al cual se le calculará el factorial, luego el valor desde el cual empieza. 
$nummax = 8;
$factorial = 1;

for ($i = 1; $i <= $nummax; $i++) {
    $factorial *= $i; /* creo un bucle, donde mientras el $i sea menor que "nummax" va a crear el bucle multiplcandolo y sumandole una unidad por bucle */
}

echo "El factorial de $nummax es $factorial" . "<br>";


?>