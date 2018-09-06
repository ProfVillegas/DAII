<?php
session_start();
include('circulo.class.php');
$vars=$_GET;
//echo $_SERVER['QUERY_STRING'];
switch($vars['op']){
        //crear objeto
    case 1:{
            //Si la sesion existe eliminarla y volver a crear
            if(isset($_SESSION)){
                // Remover las variables de sesion
                session_unset(); 

            }   

            $obj= new Circulo($vars['r'],$vars['c']);
            echo "<pre>";
            var_dump($obj);
            echo "</pre>";
            $_SESSION['r']=$vars['r'];
            $_SESSION['c']=$vars['c'];
            break;
        }
    case 2:{
        $obj= new Circulo($_SESSION['r'],$_SESSION['c']);
        echo $obj->area();
            break;
    }
    case 3:{
        $obj= new Circulo($_SESSION['r'],$_SESSION['c']);
        echo $obj->perimetro();
            break;
    }
    case 4:{
        echo "-".Circulo::ValorPi();
            break;
    }
    case 5:{
        $obj= new Circulo($_SESSION['r'],$_SESSION['c']);
        echo $obj->color();
            break;
    }
        
}


?>