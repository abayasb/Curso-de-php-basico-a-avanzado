<h1>Listado notas</h1>
<?php
    while ($nota = $notas->fetch_object()):?>
   <?= $nota->titulo ?> - <?= $nota->fecha ?></br>  
<?php endwhile ?>