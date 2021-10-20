<?php

class ClienteExternoController
{
    /**
     * Método constructor que carga el archivo del modelo que va a estar asociado. 
     */
    public function __construct()
    {
        require_once('App/Models/ClienteExterno.php');
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Cargar documentos | Finanzal Fast';
        require_once('Public/Views/clienteexterno/clienteexterno.php');
    }

    public function insert()
    {
        print_r($_POST);
        exit();
    }
}
