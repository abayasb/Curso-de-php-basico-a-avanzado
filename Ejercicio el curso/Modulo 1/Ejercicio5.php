<?php
    /*
        Ejercicio 5. Hacer un programa que muestr todos los numeros entre dos numero
        que nos llegue por la URL($_GET)
    */

    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
       if ($numero1<$numero2) {
            for ($index=$numero1+1; $index <$numero2 ; $index++) { 
                echo "<p>$index</p>";
            }
       }else {
        
        for ($index=$numero1-1; $index > $numero2 ; $index--) { 
            echo "<p>$index</p>";
        }
       }
    }else{
        echo "<h1>Error ingrese parametro</h1>";
    }

?>