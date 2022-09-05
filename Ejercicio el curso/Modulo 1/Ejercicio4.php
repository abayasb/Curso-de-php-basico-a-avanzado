<?php
    /*
        Ejercicio 4: Recoger dos numeros por la url (Parametro GET) y hacer todas 
        las operaciones basicas de una calculadora(Suma, Resta, Mul, Div)
    */
    
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        echo "a";
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $suma = $numero1 + $numero2;
        echo "<h3>La suma de $numero1 + $numero2 es = $suma</h3>";
        $resta = $numero1 - $numero2;
        echo "<h3>La resta de $numero1 - $numero2 es = $resta</h3>";
        $mult = $numero1 * $numero2;
        echo "<h3>La multiplicacion de $numero1 * $numero2 es = $mult</h3>";
        if ($numero2 != 0){
            $div = $numero1 / $numero2;
            echo "<h3>La Division de $numero1 / $numero2 es = $div</h3>";
        }else{
            echo "<h2>Error el dividendo tiene que se mayor</h2>";
        }
    }else{
        echo "<h1>No sea patan coloque los digitos</h1>";
    }
   
    
?>