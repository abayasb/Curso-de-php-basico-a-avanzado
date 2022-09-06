
<?php

    $resultado = false;
        if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            
            if (isset($_POST['suma'])) $resultado = $numero1+$numero2;
            if (isset($_POST['resta'])) $resultado = $numero1-$numero2;
            if (isset($_POST['mult'])) $resultado = $numero1*$numero2;
            if ($numero2!=0){
                if (isset($_POST['div'])) $resultado = $numero1/$numero2;
            }else{
                $resultado = "NO VALIDO";
            }
        }else{
            $resultado= "<h1>Error</h1>";
        }
    

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular 2 numeros</title>
</head>
<body>
    <form action="" method="post">
        <label for="id_numero1">Numero 1:</label>
        <input type="number" name="numero1" id="id_numero1"></br>
      
        <label for="id_numero2">Numero 2:</label>
        <input type="number" name="numero2" id="id_numero2"></br>

        <input type="submit" value="Sumar" name="suma">
        <input type="submit" value="Resta" name="resta">
        <input type="submit" value="Multiplicar" name="mult">
        <input type="submit" value="Dividir" name="div">
        <?php 
           if ($resultado):
            echo "<h3>$resultado</h3>";
           endif
        ?>

    </form>
</body>
</html>