<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <title>Document</title>
</head>

<body>
    <!-- CABEZERA -->
    <header id="header">
        <div id="logo">
            <img src="<?=base_url?>assets/img/camiseta.png" alt="" srcset="">
            <a href="<?= base_url?>producto/index">
                Tienda para camisetas
            </a>
        </div>
    </header>
    <!-- NAV -->
    <?php $a = Utils::showCategoria(); ?>
    <nav id="menu">
        <ul>
            <li><a href="<?= base_url?>">Inicio</a></li>
           <?php while($categoria = $a->fetch_object()): ?>
                <li><a href="<?=base_url?>categoria/show&id=<?=$categoria->id?>"><?=$categoria->nombre?></a></li>
           <?php endwhile; ?>
        </ul>
    </nav>
    <!-- SLIDERBAR -->
    <div id="content">