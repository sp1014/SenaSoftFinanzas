<?php

require_once('App/Core/Crud.php');
class Login extends Crud
{
    public function __construct()
    {
        parent::__construct();
    }

    public function signIn(string $user, string $password)
    {
        $sql = "SELECT id, nombre, id_tipodocumento, numero_documento, telefono, correo, pass, tipo_rol
                FROM datospersonales
                WHERE correo = '$user' AND pass = '$password'";
        return $this->find($sql);
    }
}
