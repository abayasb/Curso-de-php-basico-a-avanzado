<?php
    /**
     * Ejercicio 1. Hacer un programa en PHP que tenga un array
     * con 8 numeros enteros y que haga lo siguiente:
     * -recorrerlo y mostrarlo
     * -Ordenarlo y mostrarlo
     * -Mostrar su longuitud
     * -Mostrar de elemento
    */
    function mostrarArreglo($array)
    {
        foreach ($array as $elemento) {
            echo "<h3> $elemento</h3>";
        }
    }

    //CREACION DEL ARRAY
    $array_numero =Array(
        10,12,1,2,5,7,11,15,8,9
    );
    echo "<h1>Mostrar arreglo</h1>";
    mostrarArreglo($array_numero);

    //ORDENARLO 
    echo "<h1>Ordenarlo y mostrarlo</h1>";
    sort($array_numero);
    mostrarArreglo($array_numero);

    //MOSTRAR LA LONGUITUD
    echo "<h1>MOSTRAR LA LONGUITUD</h1>";
    /**
     * Metodo count cuenta todos los elementos
     * de un arreglo u objecto
     */
    $lon = count($array_numero);
    echo "<h3>$lon</h3>";
    
    //Mostrar de elemento 
    echo "<h1>Mostrar de elemento</h1>";
    $busqueda = 12;
    /**
     * el metodo array_search busca un elemento dentro de un arreglo y
     * devuelve  la primera clave correspondiente.
     */
    $search=array_search($busqueda,$array_numero);
    if (!empty($search)) {
        echo "<h3>Elemento encontrado en el indice: $search</h3>";
    }else{
        echo "<h3>Elemento no encontrado</h3>";
    }
?>