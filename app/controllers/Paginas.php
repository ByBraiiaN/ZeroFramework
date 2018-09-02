<?php
//Controlador por defecto

class Paginas extends Controller{
    public function __construct(){
        /*
        EJEMPLO
        echo 'Controlador paginas cargado ';  
        $this->articuloModelo = $this->modelo('Articulo');     
        */
    }
    
    public function index(){

        /*
        EJEMPLO
        $articulos = $this->articuloModelo->obtenerArticulos();
        */

        $datos = [
            'titulo' => 'Bienvenido a ZeroFramework con PHP MVC'
        ];

        $this->vista('pages/inicio', $datos);
    }
}