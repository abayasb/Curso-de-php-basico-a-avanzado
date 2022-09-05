<?php 
    /*
        Ejercicio 3: Escribir un programa que imprima por pantalla los cuadrados
        (un numero multiplicado por si mismo) de los 40 primeros numeros naturales
        PD: Utilizar bucle while
        */
        $longuitud = 40;
        $contador = 1;
        while ($contador <= $longuitud) {
            # code...
            $numero = $contador*$contador ;
            echo "<h1>El numero: $contador su cuadrado: $numero</h1>";
            $contador++;

        }
        
?>