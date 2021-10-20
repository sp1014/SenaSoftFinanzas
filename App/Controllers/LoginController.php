<?php

/**
 * Controla el inicio de sesión.
 */
class LoginController
{
    /**
     * Método constructor que carga el archivo del modelo que va a estar asociado. 
     */
    public function __construct()
    {
        require_once('App/Models/Login.php');
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Iniciar sesión | Finanzal Fast';
        require_once('Public/Views/signIn/login.php');
    }


    public function error()
    {
        require_once('Public/Views/errors/404.php');
    }
}
