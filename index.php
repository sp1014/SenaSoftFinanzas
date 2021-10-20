<?php

require_once('App/Helpers/Helpers.php');
require_once('Config/Conection.php');
require_once('Config/Config.php');
require_once('App/Core/Routes.php');

if (isset($_GET['c'])) {
    $controller = loadController($_GET['c']);
    if (isset($_GET['a'])) {
        if (isset($_GET['id'])) {
            loadMethod($controller, $_GET['a'], $_GET['id']);
        } else {
            loadMethod($controller, $_GET['a']);
        }
    } else {
        loadMethod($controller, 'index');
    }
} else {
    $controller = loadController(MAIN_CONTROLLER);
    loadMethod(MAIN_CONTROLLER, 'index');
}
