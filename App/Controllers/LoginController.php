<?php

/**
 * Controla el inicio de sesión.
 */
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
        require_once('Public/Views/signIn/login.php');
    }

    public function signIn()
    {
        if ($_POST) {
            if (empty($_POST['txtEmail']) || empty($_POST['txtPass'])) {
                $arrResponse = ['status' => false, 'msg', 'Todos los campos son requeridos !!'];
            } else {
                $login = new Login();
                $user = trim($_POST['txtEmail']);
                $password = trim($_POST['txtPass']);

                $request = $login->signIn($user, $password);

                if (!empty($request)) {
                    $_SESSION['id'] = $request['id'];
                    $_SESSION['sessionLogin'] = $request;
                    $_SESSION['login'] = true;
                    $arrResponse = ['status' =>  true, 'msg' => 'ok'];
                } else {
                    $arrResponse = ['status' => false, 'msg' => 'Usuario o contraseñas incorrectas. Por favor intenta nuevamente !!'];
                }
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }
}
