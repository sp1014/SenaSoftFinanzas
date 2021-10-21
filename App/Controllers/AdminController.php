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
    { $this->model = new admin();
        
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Usuarios | Finanzal Fast';
        require_once('Public/Views/admin/admin.php');
    }


    public function Crud(){
        $pvd = new admin();

        //Se obtienen los datos de los usuarios a editar.
        if(isset($_REQUEST['id'])){
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }

        //Llamado de las vistas.
      
        require_once 'Public/Views/admin/admin-editar.php';
      
  }

    //Llamado a la vista admin-nuevo
    public function Nuevo(){
        $pvd = new admin();

        //Llamado de las vistas.
      
        require_once 'Public/Views/admin/admin-nuevo.php';
      
    }

    //Método que registrar al modelo un nuevo usuario.
    public function Guardar(){
        $pvd = new admin();

        //Captura de los datos del formulario (vista).
        $pvd->id = $_REQUEST['id'];
        $pvd->nombre = $_REQUEST['nombre'];
        $pvd->id_tipodocumento = $_REQUEST['id_tipodocumento'];
        $pvd->numero_documento = $_REQUEST['numero_documento'];
        $pvd->telefono = $_REQUEST['telefono'];
        $pvd->correo = $_REQUEST['correo'];
        $pvd->pass = $_REQUEST['pass'];
        $pvd->tipo_rol = $_REQUEST['tipo_rol'];
        $pvd->estado = $_REQUEST['estado'];
        //Registro al modelo Usuarios.
        $this->model->Registrar($pvd);

        header('Location: index.php');
    }

    //Método que modifica el modelo de un Usuario.
    public function Editar(){
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

        header('Location: index.php');
    }

    //Método que elimina el Usuario con el id dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['nit']);
        header('Location: index.php');
    }
}




 