<?php
require_once('App/Models/ClienteInterno.php');
/**
 * Controla el inicio de sesión.
 */
class ClienteController
{
    private $model;
    /**
     * Método constructor que carga el archivo del modelo que va a estar asociado. 
     */
    public function __CONSTRUCT()
    { $this->model = new cliente();
        
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
       
        require_once('Public/Views/cliente/cliente.php');
    }





}





