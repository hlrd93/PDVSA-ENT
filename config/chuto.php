<?php 

class Chuto {

	public $id_chuto;
	public $placa_chuto;
	public $placa_nueva_chuto; 
	public $serial_carroceria_chuto; 
	public $serial_motor_chuto; 
	public $marca_chuto; 
	public $tipo_chuto;
	public $modelo_chuto; 
	public $a_o_chuto;
	public $nombre_color_chuto;
	public $color_chuto_1;
	public $observacion_chuto_estado;
	public $fecha_chuto_estado;
	public $nombre_sede;
	public $chuto_estado;
	public $buscar;
	
	public static function listar_chutos()
	{
		$sql = "SELECT id_chuto, placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, "; 
		$sql .= "serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, ";
		$sql .= "nombre_color_chuto, color_chuto_1, observacion_chuto_estado, ";
		$sql .= "fecha_chuto_estado, nombre_sede, chuto_estado "; 
		$sql .= "FROM chuto INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto ";
		$sql .= "INNER JOIN chuto_estado ON chuto_estado.id_chuto_estado = chuto.id_chuto_estado ORDER BY id_chuto ASC";
		$resultado = self::consulta($sql);
		return !empty($resultado) ? $resultado : false;

	}

	public static function buscar_chutos($buscar)
	{
		global $database;
		$sql  = "SELECT id_chuto, placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, "; 
		$sql .= "serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, ";
		$sql .= "nombre_color_chuto, color_chuto_1, observacion_chuto_estado, ";
		$sql .= "fecha_chuto_estado, nombre_sede, chuto_estado "; 
		$sql .= "FROM chuto INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto ";
		$sql .= "INNER JOIN chuto_estado ON chuto_estado.id_chuto_estado = chuto.id_chuto_estado ";
		$sql .= "WHERE id_chuto LIKE '%".$buscar."%' ";
		$sql .= "OR placa_chuto LIKE '%".$buscar."%' ";
		$sql .= "OR placa_nueva_chuto LIKE '%".$buscar."%' ";
		$sql .= "OR serial_carroceria_chuto LIKE '%".$buscar."%' ";
		$sql .= "OR serial_motor_chuto  LIKE '%".$buscar."%' "; 
		$sql .= "ORDER BY id_chuto ASC";

		$resultado = self::consulta($sql);
		return !empty($resultado) ? $resultado : false;
	}

	
	public static function consulta($sql){
		global $database;
		
		$resultado_listado = $database->query($sql);
		
		$objeto_array = array();

		while($registro = mysqli_fetch_array($resultado_listado)) {

			$objeto_array[] = self::instanciacion($registro);

		}

		return $objeto_array;
	}
	
	private static function instanciacion($registro){

		$chuto = new self();

        foreach ($registro as $propiedad => $value) {
        	
        	if($chuto->tiene_la_propiedad($propiedad)) {

        		//setter setea el valor de la propiedad de la clase
        		$chuto->$propiedad = $value;

        	}
        }

        return $chuto;
	}

	private function tiene_la_propiedad($propiedad) {

		$propiedades_objeto = get_object_vars($this);
		return array_key_exists($propiedad, $propiedades_objeto);


	}

	public function registrar_chuto()
	{
		global $database;

		$sql = "SELECT id_chuto FROM chuto WHERE serial_carroceria_chuto='".$database->escape_string($this->serial_carroceria_chuto)."' OR placa_chuto='".$database->escape_string($this->placa_chuto)."'";

		$resultado = $database->query($sql);
		
		if($resultado->num_rows==0)
		{
			$sql = "INSERT INTO chuto(placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, ";
			$sql .= "serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, ";
			$sql .= "nombre_color_chuto, color_chuto_1, observacion_chuto_estado, fecha_chuto_estado, ";
			$sql .= "id_sede_chuto, id_chuto_estado) ";
			$sql .= "VALUES ('";
			$sql .= $database->escape_string($this->placa_chuto)."','";
			$sql .= $database->escape_string($this->placa_nueva_chuto)."','";
			$sql .= $database->escape_string($this->serial_carroceria_chuto)."','";
			$sql .= $database->escape_string($this->serial_motor_chuto)."','";
			$sql .= $database->escape_string($this->marca_chuto)."','";
			$sql .= $database->escape_string($this->tipo_chuto)."','";
			$sql .= $database->escape_string($this->modelo_chuto)."','";
			$sql .= $database->escape_string($this->a_o_chuto)."','";
			$sql .= $database->escape_string($this->nombre_color_chuto)."','";
			$sql .= $database->escape_string($this->color_chuto_1)."','";
			$sql .= $database->escape_string($this->observacion_chuto_estado)."','";
			$sql .= $database->escape_string($this->fecha_chuto_estado)."','";
			$sql .= $database->escape_string($this->id_sede_chuto)."','";
			$sql .= $database->escape_string($this->id_chuto_estado)."')";

				if($database->query($sql)) {
					$this->id_chuto = $database->ultimo_id();
					return true;
				}
				else {
					return false;
				}
		}
		else {
			return false;
		}
	}
} //Fin de Clase Chuto

?>
