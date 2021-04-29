<?php

    class FrontController{
        
        static function main(){
            require 'libs/View.php';
            require 'libs/configuration.php';
            
            if(!empty($_GET['controller']))  //Revisa si viene un controlador, síno carga por defecto el index
                $controllerName=$_GET['controller'].'Controller';
            else 
                $controllerName='IndexController';//controlador por defecto
            
            if(!empty($_GET['action'])) //Revisa si viene una acción sino carga por defecto mmostrar
                $nombreAccion=$_GET['action'];
            else 
                 $nombreAccion='showIndex';//acción por defecto
            
            $rutaControlador=$config->get('controllerFolder').$controllerName.'.php';
            
            if(is_file($rutaControlador))
                require $rutaControlador;
            else 
                die ('Controlador no encontrado - 404 not found');
            
            if(is_callable(array($controllerName, $nombreAccion))==FALSE){
                trigger_error($controllerName.'->'.$nombreAccion.' no existe', E_USER_NOTICE);
                return FALSE;
            }
            $controller=new $controllerName();
            $controller->$nombreAccion();
        } // main
        
        
    }
    
?>