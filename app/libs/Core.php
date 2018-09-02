<?php

/* 
 Mapeamos la url ingresada en el navegador, traemos
 1- controlador
 2- método
 3- parametro
    EJEMPLO: /articulos/editar/4
 */

class Core{
    //Controlador por defecto
    protected $controladorActual = 'paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];
    
    //Constructor
    public function __construct(){
        //Llamamos al método
        $url = $this->getUrl();
        
        //Buscar en controllers si el controlador existe
        if(file_exists('../app/controllers/'.$url[0].'.php')){
            //Si existe se setea como controlador por defecto
            $this->controladorActual = $url[0];
            
            //unset indice
            unset($url[0]);
        }
        
        //requerir el controlador
        require_once '../app/controllers/'.$this->controladorActual.'.php';
        $this->controladorActual = new $this->controladorActual;
        
        //Chequear la segunda parte de la url que seria el método
        if(isset($url[1])){
            if(method_exists($this->controladorActual, $url[1])){
                //chequeamos el método
                $this->metodoActual = $url[1];

                //unset indice
                unset($url[1]);
            }
        }
                
        //Para probar traer método
        //echo $this->metodoActual;
            
        //Obtener los parametros
        $this->parametros = $url ? array_values($url) : [];
            
        //Llamar callback con parametros array
        call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);     
    }
    
    //Obtenemos la URL
    public function getUrl(){
        //echo $_GET['url'];
        
        if(isset($_GET['url'])){
            //Si la URL fue seteado separamos con /
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}