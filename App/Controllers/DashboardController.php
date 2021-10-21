<?php

class DashboardController
{
    /**
     * Método constructor que carga el archivo del modelo que va a estar asociado. 
     */
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            header('Location: ' . URL . '?c=Login&a=index');
        }
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Dashboard | Financialfast';
        require_once('Public/Views/dashboard/index.php');
    }
}
