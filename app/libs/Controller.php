<?php

//Controlador Principal - usada por los demas controladores
//Se encarga de poder cargar los modelos y las vistas

class Controller{
    
    //Cargar modelo
    public function modelo($modelo){
        require_once '../app/models/'.$modelo.'.php';
        
        //Instanciar el modelo
        return new $modelo();
    }
    
    //Cargar vista
    public function vista($vista, $datos = []){
        //Comprobamos si existe la vista
        if(file_exists('../app/views/'.$vista.'.php')){
            require_once '../app/views/'.$vista.'.php';
        }else{
            die('La vista no existe');
        }
    }
}