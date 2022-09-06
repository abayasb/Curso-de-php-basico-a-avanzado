<?php
    /**
     * Ejercicio 2. Escribir un programa con PHP que añada valores a un array 
     * mientras que su longuitud sea menor a 120 y luego mostrarlo por pantalla.
     */

     $array = Array();
     for ($index=0; $index < 120 ; $index++) { 
        /**Utilizamos el metodo propio del array el cual es 
         * array_push, el cual nos pide como parametros el
         * array y un valor, que este caso sera el valor de la 
         * variable index
         */
        array_push($array,"Elemento-".$index);
        
     }
     print_r($array);
?>