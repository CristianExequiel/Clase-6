
<?php

    if (!empty($_GET['NombreAlumno']) && !empty($_GET['NotaNumerica'])) /* con el !empty trabajo con el opuesto de empty */ {
        /* defino las variables nombre y nota a comparar mas adelante */
        $nombre = $_GET['NombreAlumno'];
        $nota = $_GET['NotaNumerica'];

        if (is_numeric($nota)) /* con "is_numeric" evaluo que sea un numero y no otros caracteres */ {
            if ($nota >= 0 && $nota <= 2) {
                $calificacion = "Muy deficiente";
            } elseif ($nota >= 3 && $nota <= 5) {
                $calificacion = "Insuficiente";
            } elseif ($nota >= 6 && $nota <= 7) {
                $calificacion = "Bien";
            } elseif ($nota >= 8 && $nota <= 9) {
                $calificacion = "Notable";
            } elseif ($nota == 10) {
                $calificacion = "Sobresaliente";
            } else {
                $calificacion = "La nota no está en el rango válido (0-10)";
            }
        /* si el valor colocado en nota, no es un numero, arroja el sgte resultado */
        } else {
            $calificacion = "La nota no es un número válido";
        }

        /* muestro los resultados obtenidos de acuerdo a las condiciones anteriores. */
        echo "Alumno: " . $nombre . "<br>";
        echo "Nota numérica: " . $nota . "<br>";
        echo "Calificación: " . $calificacion . "<br>";

        /* En caso de que el opuesto del empty no sea true... muestran los siguientes mensajes */
    } else {
        if (empty($_GET['NombreAlumno'])) {
            echo "El nombre del alumno no fue ingresado.<br>";
        }
        if (empty($_GET['NotaNumerica'])) {
            echo "La nota no fue ingresada.<br>";
        }
    }

?>


