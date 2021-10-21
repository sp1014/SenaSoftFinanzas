<?php

class admin
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
    public $id;
    public $nombre;
    public $id_tipodocumento;
    public $numero_documento;
	public $telefono;
	public $correo;
	public $pass;
	public $tipo_rol;
	public $estado;

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
			$stm = $this->pdo->prepare("SELECT * FROM datospersonales");
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
	public function Eliminar($id)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM datospersonales WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el id del usuario.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE datospersonales SET
						nombre = ?,
						id_tipodocumento = ?,
                        numero_documento = ?,
						telefono = ?,
						correo = ?,
						pass = ?,
						tipo_rol = ?,
						estado = ?
				    WHERE id = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->id_tipodocumento,
                        $data->numero_documento,
						$data->telefono,
						$data->correo,
						$data->pass,
						$data->tipo_rol,
						$data->estado,
                        $data->id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo usuario a la tabla.
	public function Registrar(admin $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO datospersonales (id,nombre,id_tipodocumento,numero_documento,telefono,correo,pass,tipo_rol,estado)
		        VALUES (?, ?, ?, ?, ?, ? ,? ,? ,?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id,
					$data->nombre,
					$data->id_tipodocumento,
					$data->numero_documento,
					$data->telefono,
					$data->correo,
					$data->pass,
					$data->tipo_rol,
					$data->estado,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
