<?php  

require_once("configuracion.php");

class Database {
	
	public $conexion;

	function __construct()
	{
		$this->abrir_conexion_db();
	}

	public function abrir_conexion_db(){

	$this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if ($this->conexion->connect_errno)
		{
			
			die("Base de Datos: Fallo la Conexion... Contacte al WebDeveloper...". mysqli_error());
		}
	}

	public function query($sql)
	{
		$resultado = mysqli_query($this->conexion, $sql);
		
		return $resultado;
	}

	private function confirmar_consulta($resultado)
	{
		if(!$resultado){
			die("Consulta a la Base de Datos Fallo");
		}
	}

	public function escape_string()
	{

		$escaped_string = mysqli_real_escape_string($this->conexion, $string);
		return $escaped_string;
	}

}

$database = new Database();



?>