<?php
require_once '../vendor/autoload.php';

//conexion a la base de datos 
$connection = new mysqli('localhost','root','','curso');
$connection->query("SET NAME 'utf8'");

//sacar los datos 
$result = $connection->query("SELECT * FROM notas");


//realiza la paginacion
$pagination = new Zebra_Pagination();

//numero de elementos total a paginar
$number_element_page =$result->num_rows;
$pagination->records($number_element_page);

//numero de elementos por paginar
$number_elements = 2;
$pagination->records_per_page($number_elements);
$page = $pagination->get_page();

//operacion para el inicio de la paginacion;
$start = ($page-1)*$number_elements;

//sql para limitar los datos
$notas = $connection->query("SELECT * FROM notas LIMIT $start, $number_element_page");

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
//recorrimos los datos para presentar 
while ($nota = $notas->fetch_object()) {
    echo "<h1>{$nota->titulo}</h1>";
}

//rederizamos para que se muestre la paginacion
$pagination->render();
