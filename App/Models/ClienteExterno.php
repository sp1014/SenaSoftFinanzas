<?php
require_once('App/Core/Crud.php');
class ClienteExterno extends Crud
{
    public function __construct()
    {
        parent::__construct();
    }

    public function new(string $name_file, string $id_datospersonales, string $id_categoria)
    {
        $sql = "SELECT id, nombre_archivo, id_datospersonales, id_categoria
                FROM clienteexterno
                WHERE nombre_archivo = '$name_file' AND id_datospersonales = '$id_datospersonales'
                AND id_categoria = '$id_categoria'";
        $request = $this->all($sql);
        if (empty($request)) {
            $sql = "INSERT INTO clienteexterno(nombre_archivo, id_datospersonales, id_categoria)
            VALUES(?,?,?)";
            $arrValues = [
                $name_file,
                $id_datospersonales,
                $id_categoria
            ];
            return $this->insert($sql, $arrValues);
        } else {
            return 'exists';
        }
    }
}
