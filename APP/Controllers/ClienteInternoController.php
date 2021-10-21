<?php
//Se incluye el modelo donde conectará el controlador.

require_once('App/Models/ClienteInterno.php');

class UserController{

    private $model;

 
    public function __CONSTRUCT()
    { $this->model = new admin();
        
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Usuarios | Finanzal Fast';
        require_once 'view/clienteexterno/clienteexterno.php';
    }



    //Llamado a la vista proveedor-editar
    public function Crud(){
        $pvd = new user();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['id'])){
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/user/user-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista proveedor-nuevo


    //Método que registrar al modelo un nuevo proveedor.


 

    //Método que elimina la tupla proveedor con el nit dado.
   
}




