<?php
session_start();
// index login
require_once("config.php");
require_once("controlador/index.php");

if(isset($_SESSION['login'])):
    if(isset($_GET['m'])):
        $metodo =   $_GET['m'];
        $mth    =   $_GET['mth'];
        $probar = 'modeloController'.$mth;
        if(method_exists($probar,$metodo)):
            // modeloControllerSchedulers::{$metodo}();
           switch ($mth) {
               case 'Schedulers':
                   modeloControllerSchedulers::{$metodo}();
                   break;
               case 'Drivers':
                   modeloControllerDrivers::{$metodo}();
                   break;
                case 'Vehicles':
                   modeloControllerVehicles::{$metodo}();
                   break;
                case 'Routes':
                   modeloControllerRoutes::{$metodo}();
                   break;
                case 'Login':
                   modeloControllerLogin::{$metodo}();
                   break;
               default:
                   // code...
                   break;
           }
        endif;
    else:
        if(isset($_GET['mth'])):
            $mth    =   $_GET['mth'];
            switch ($mth) {
               case 'Schedulers':
                   modeloControllerSchedulers::index();
                   break;
               case 'Drivers':
                   modeloControllerDrivers::index();
                   break;
                case 'Vehicles':
                   modeloControllerVehicles::index();
                   break;
                case 'Routes':
                   modeloControllerRoutes::index();
                   break;
                case 'Login':
                   modeloControllerLogin::index();
                   break;
               default:
                    
                   break;
            }
        else:
            modeloControllerSchedulers::index();
            // modeloControllerLogin::index();

        endif;
    endif;
else:
    if(isset($_GET['m'])=='validar'):
        modeloControllerLogin::validar();
    endif;
    modeloControllerLogin::index();
endif;
?>