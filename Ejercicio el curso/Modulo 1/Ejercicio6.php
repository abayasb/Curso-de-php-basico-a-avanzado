<?php
    /*
        Ejercicio 6. Table de multiplicar con tabla
    */
    echo "<table border= '1'";
    echo "<tr>";
    for ($cabezera=1; $cabezera <= 10 ; $cabezera++) { 
       echo "<td> Table del $cabezera </td>";
    }
    echo "</tr>";
    echo "<tr>";
    for ($tabla=1; $tabla <=10 ; $tabla++) { 
       echo "<td>";
        for ($i=1; $i < 10 ; $i++) { 
            $resultado = $tabla * $i;
            echo " $tabla * $i = $resultado </br>";
        }
        echo "</td>";
    } 
    echo "</tr>";
    echo "</table>";
   

?>