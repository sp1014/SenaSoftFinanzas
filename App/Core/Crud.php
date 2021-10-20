<?php

require_once('Config/Conection.php');
/**
 * Contiene los métodos con las operaciones de CRUD que se puede aplicar sobre la base de datos.
 */
class Crud
{
    /**
     * 
     */
    private $conexion = null;
    private string $sql = '';
    private array $arrData = [];

    /**
     * Método constructor que inicializa la conexión a la base de datos.
     */
    public function __construct()
    {
        $this->conexion = Database::Conectar();
    }

    /**
     * Procesar e insertar los datos en la base de datos.
     * @param string $sql Sentencia SQL que se va a procesar y ejecutar en el gestor de base de datos.
     * @param array $data Arrego con los datos que se va a insertar en la base de datos.
     * @return int $r Si se realizó correctamente la transacción retorna el ultimo ID insertado, de lo
     * contrario retorna el valor de 0.
     */
    public function insert(string $sql, array $data)
    {
        $r = 0;
        $this->sql = $sql;
        $this->arrData = $data;

        $stmt = $this->conexion->prepare($this->sql);
        if ($stmt->execute($this->arrData)) {
            $r = $this->conexion->lastInsertId();
        }
        return $r;
    }

    /**
     * Encontrar un elemento en la base de datos.
     * @param string $sql Sentencia SQL que se va a procesar y ejecutar en el gestor de base de datos.
     * @return 
     */
    public function find(string $sql)
    {
        $this->sql = $sql;
        $stmt = $this->conexion->prepare($this->sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Retorna todos los resultados encontrados en la base de datos.
     * @param string $sql Sentencia SQL que se va a procesar y ejecutar en el gestor de base de datos.
     */
    public function all(string $sql)
    {
        $this->sql = $sql;

        $stmt = $this->conexion->prepare($this->sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Editar o actualizar la información a la base de datos.
     * @param string $sql Sentencia SQL que se va a procesar y ejecutar en el gestor de base de datos.
     */
    public function update(string $sql, array $data)
    {
        $this->sql = $sql;
        $this->arrData = $data;
        $stmt = $this->conexion->prepare($this->sql);
        return $stmt->execute($this->arrData);
    }

    /**
     * Eliminar un registro de la base de datos.
     * @param string $sql Sentencia SQL que se va a procesar y ejecutar en el gestor de base de datos.
     */
    public function delete(string $sql)
    {
        $this->sql = $sql;
        $stmt = $this->conexion->prepare($this->sql);
        return $stmt->execute();
    }
}
