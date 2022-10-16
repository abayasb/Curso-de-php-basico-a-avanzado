<?php
    require_once '../vendor/autoload.php';

    $oring_photo = 'img/imagen.jpg';
    $photo_alter = 'img/imagen-alter.jpg';
 
    
    $thumb = new PHPThumb\GD($oring_photo);
    //Redimencionar 
    $thumb->resize(100, 100);
    
    //Recortar
    $thumb->crop(50,50,100,100);
    $thumb->show();
    //$thumb->save($photo_alter);