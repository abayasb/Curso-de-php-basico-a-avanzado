<?php


$tabla = array(
    "ACCION"=> array("GTA-5","Call of duty","PUGB"),
    "AVENTURA"=>array("ASSASING","CRAH","PRONCE OF PERSIA"),
    "DEPORTE"=>array("FIFA","PES 19","MOTO")
);
$categoria = array_keys($tabla);
print(count($categoria));
?>

<table border="1">
    <tr>
        <?php foreach ($categoria as $elemento) { 
           echo "<th>$elemento</th>";
        } ?>
    </tr>
    <tr>
        <td><?= $tabla['ACCION'][0]?></td>
        <td><?= $tabla['AVENTURA'][0]?></td>
        <td><?= $tabla['DEPORTE'][0]?></td>
    </tr>
    <tr>
        <td><?= $tabla['ACCION'][1]?></td>
        <td><?= $tabla['AVENTURA'][1]?></td>
        <td><?= $tabla['DEPORTE'][1]?></td>
    </tr>
    <tr>
        <td><?= $tabla['ACCION'][2]?></td>
        <td><?= $tabla['AVENTURA'][2]?></td>
        <td><?= $tabla['DEPORTE'][2]?></td>
    </tr>
</table>