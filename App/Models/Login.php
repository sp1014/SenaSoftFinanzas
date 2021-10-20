<?php

require_once('../Core/Crud.php');
class Login extends Crud
{
    public function __construct()
    {
        parent::__construct();
    }

    public function signIn(string $user, string $password)
    {
        $sql = "SELECT id, correo, pass
                FROM datospersonales
                WHERE correo = ${$user} AND pass = ${$password}";
        return $this->find($sql);
    }
}
