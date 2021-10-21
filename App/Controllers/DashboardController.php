<?php

class DashboardController
{
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Dashboard | Finanzal Fast';
        require_once('Public/Views/dashboard/index.php');
    }
}
