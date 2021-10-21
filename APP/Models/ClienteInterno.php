<?php
class user
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
	//proveedor en caso de error se muestra por pantalla.
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

	//Este método obtiene los datos del proveedor a partir del nit
	//utilizando SQL.
	public function Obtener($nit)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM datospersonales WHERE id = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($nit));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla proveedor dado un nit.
	public function Eliminar($nit)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM datospersonales WHERE id = ?");

			$stm->execute(array($nit));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el nit del proveedor.
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

	//Método que registra un nuevo proveedor a la tabla.
	public function Registrar(user $data)
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
