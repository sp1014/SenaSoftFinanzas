<?php

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
