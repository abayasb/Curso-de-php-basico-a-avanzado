<?php

//CARGAMOS LAS CLASES DE QUE SE ENCUETRA EN LOS CONTROLADORES
function autoload($classname){ include 'controllers/'. $classname.'.php'; }

spl_autoload_register('autoload');