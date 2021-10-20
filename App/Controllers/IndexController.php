<?php

/**
 * Controlar las peticiones provenientes desde la vista, y también hace las peticiones al modelo 
 * con el fin de obtener la información requerida por el cliente.
 */
class IndexController
{
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Menú | ' . NAME;
        require_once('Public/Views/index.php');
    }

    /**
     * Carga la vista de error
     */
    public function error()
    {
        require_once('Public/Views/errors/404.php');
    }
}
