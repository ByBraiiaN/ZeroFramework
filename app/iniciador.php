<?php

##Cárga de todas las clases de los controladores

//Cargamos librerias
require_once 'config/config.php';

//require_once 'libs/database.php';
//require_once 'libs/controller.php';
//require_once 'libs/core.php';

//Autoload PHP - Cargamos todas las librerias
spl_autoload_register(function($nombreClase){
    require_once 'libs/'.$nombreClase.'.php';
});