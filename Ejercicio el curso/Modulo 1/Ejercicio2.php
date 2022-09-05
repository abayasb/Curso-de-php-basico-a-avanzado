<?php 
    /* 
       Ejericio 2: Escribir un script en PHP que nos muestre por pantalla
       todos los numeros pares del 1 al 100
    */
    $longuitud = 100;
    $contador = 0;
    while ($contador <= $longuitud) {
        if ($contador % 2==0){
            echo "<p>$contador</p>";
        }
        $contador++;
    }

?>