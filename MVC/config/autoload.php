<?php

function autoload($class_name){ include 'controller/'.$class_name.'.php'; }

spl_autoload_register('autoload');