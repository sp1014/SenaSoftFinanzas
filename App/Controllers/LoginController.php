<?php

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
        require_once('Public/Views/index.php');
    }
}
