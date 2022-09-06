<?php

    /**
     * Ejercicio 3. Programa que compruebe si una variable esta variable esta vacia y si esta vacia
     * rellene con un texto en minuscula y mostrarlo en mayucula y en negrita.
     */

    $text = "";

    if (empty($text)) {
        $text = "hola soy un aprendiz que quiere seguir soñando";
        $textMayu = strtoupper($text);

        echo "<strong> $textMayu </strong>";
    }else{
        echo "La variable tiene un contenido adentro";
    }

?>