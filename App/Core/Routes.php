<?php

/**
 * Cargar en controlador que se va a encargar de recibir las peticiones del cliente.
 */
function loadController($controller)
{
    $nameController = ucwords(strtolower($controller)) . "Controller";
    $nameFile = "App/Controllers/$nameController.php";

    if (!is_file($nameFile)) {
        $nameFile = "App/Controllers/" . MAIN_CONTROLLER . "Controller.php";
    }
    require_once($nameFile);
    return new $nameController();
}

/**
 * Cargar un método que se encuentra dentro del controlador que ya se cargo.
 * @param object $controller Nombre del controlador que en donde se encuentra el método.
 * @param string $method Nombre del método que se va a cargar y que se encuentra dentro del controlador.
 * @param int $id En caso de que se necesite pasar un id
 */
function loadMethod($controller, $method, $id = null)
{
    if (isset($_GET['a']) && method_exists($controller, $method)) {
        if($id != null){
            $controller->$method($id);
        }else{
            $controller->$method();
        }
    } else {
        $controller->index();
    }
}
