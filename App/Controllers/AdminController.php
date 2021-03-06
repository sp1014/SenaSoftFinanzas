<?php
require_once('App/Models/Admin.php');
/**
 * Controla el inicio de sesión.
 */
class AdminController
{
    private $model;
    /**
     * Método constructor que carga el archivo del modelo que va a estar asociado. 
     */
    public function __CONSTRUCT()
    {
        session_start();
        $this->model = new admin();
        if (!isset($_SESSION['login'])) {
            header('Location: ' . URL . '?c=Login&a=index');
        }
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Usuarios | Financialfast';
        require_once('Public/Views/admin/admin.php');
    }

    public function Crud()
    {
        $pvd = new admin();

        //Se obtienen los datos de los usuarios a editar.
        if (isset($_REQUEST['id'])) {
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }
        //Llamado de las vistas.
        require_once 'Public/Views/admin/admin-editar.php';
    }

    //Llamado a la vista admin-nuevo
    public function Nuevo()
    {
        $pvd = new admin();
        //Llamado de las vistas.
        require_once 'Public/Views/admin/admin-nuevo.php';
    }

    //Método que registrar al modelo un nuevo usuario.
    public function Guardar()
    {
        $pvd = new admin();

        //Captura de los datos del formulario (vista).
        $pvd->nombre = $_REQUEST['nombre'];
        $pvd->id_tipodocumento = $_REQUEST['id_tipodocumento'];
        $pvd->numero_documento = $_REQUEST['numero_documento'];
        $pvd->telefono = $_REQUEST['telefono'];
        $pvd->correo = $_REQUEST['correo'];
        $pvd->pass = $_REQUEST['pass'];
        $pvd->tipo_rol = $_REQUEST['tipo_rol'];
        $pvd->estado = $_REQUEST['estado'];
        //Registro al modelo Usuarios.
        $request = $this->model->Registrar($pvd);

        if (intval($request) > 0) {
            $arrResponse = ['status' => true, 'msg' => 'Usuario registrado exitosamente :)'];
        } elseif ($request == 'exists') {
            $arrResponse = ['status' => false, 'msg' => 'Ya existe un usuario con esos datos personales. Por favor registra uno nuevo.'];
        } else {
            $arrResponse = ['status' => false, 'msg' => 'Ha ocurrido un error en el servidor, por favor intenta más tarde'];
        }
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        die();
    }

    //Método que modifica el modelo de un Usuario.
    public function Editar()
    {
        $pvd = new admin();

        $pvd->id = $_REQUEST['id'];
        $pvd->nombre = $_REQUEST['nombre'];
        $pvd->id_tipodocumento = $_REQUEST['id_tipodocumento'];
        $pvd->numero_documento = $_REQUEST['numero_documento'];
        $pvd->telefono = $_REQUEST['telefono'];
        $pvd->correo = $_REQUEST['correo'];
        $pvd->pass = $_REQUEST['pass'];
        $pvd->tipo_rol = $_REQUEST['tipo_rol'];
        $pvd->estado = $_REQUEST['estado'];

        $this->model->Actualizar($pvd);

        header('Location: ?c=admin&a=insert');
    }

    //Método que elimina el Usuario con el id dado.
    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ?c=admin&a=Nuevo.php');
    }
}
