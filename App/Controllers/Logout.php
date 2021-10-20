<?php
class LogoutController
{
    public function index()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location:' . URL . 'Login');
    }
}
