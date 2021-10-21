<?php

class cliente
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
    

	//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método selecciona todas las tuplas de la tabla

	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT C.nombre AS categoria, P.nombre_archivo as clienteexterno, A.nombre as datospersonales  FROM categoria C JOIN clienteexterno P ON C.id = P.id_categoria JOIN datospersonales A ON P.id_datospersonales");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del usuario a partir del id
	//utilizando SQL.
	public function Obtener($id)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el id del usuario.
			$stm = $this->pdo->prepare("SELECT * FROM datospersonales WHERE id = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro id.
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla usuario dado un id.
	


}
