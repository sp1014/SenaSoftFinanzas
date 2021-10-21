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
    {
        session_start();
        $this->model = new cliente();
        if (!isset($_SESSION['login'])) {
            header('Location: ' . URL . '?c=Login&a=index');
        }
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Cliente interno | ' . NAME;
        require_once('Public/Views/cliente/cliente.php');
    }
}
