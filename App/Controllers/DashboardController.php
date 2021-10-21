<?php

class DashboardController
{
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Dashboard | Financialfast';
        require_once('Public/Views/dashboard/index.php');
    }
}
