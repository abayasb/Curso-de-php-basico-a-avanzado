<?php

class NotaController{
    
    public function list()
    {
        require_once 'model/Nota.php';
        //Instaciamos al modelo Nota
        $nota = new Nota();
       
        $notas = $nota->list('notas');
        require_once 'view/nota/view-nota.php';
    }

    public function create()
    {
        require_once 'model/Nota.php';
        $nota = new Nota();
        $nota->setTitulo('Nota 2');
        $nota->setDescripcion('Nota desde MVC');
        $nota->setId_usuario(1);
        
        $nota->save();
        echo $nota->db->error;
        header("Location: index.php?controller=Nota&action=list");
        
    }


}