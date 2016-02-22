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
	public $color_chuto_1; 
	public $color_chuto_2;
	public $observacion_chuto_estado;
	public $fecha_chuto_estado;
	public $nombre_sede;
	public $chuto_estado;
	
	public static function listar_chutos()
	{
		$sql = "SELECT id_chuto, placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, color_chuto_1, color_chuto_2, observacion_chuto_estado, fecha_chuto_estado, nombre_sede, chuto_estado  FROM chuto INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto INNER JOIN chuto_estado ON chuto_estado.id_chuto_estado = chuto.id_chuto_estado";
		
		return self::consulta($sql);

	}

	public static function registrar_chuto($placa_chuto, $placa_nueva_chuto, $serial_carroceria_chuto, $serial_motor_chuto, $marca_chuto, $tipo_chuto, $modelo_chuto, $a_o_chuto, $color_chuto_1, $color_chuto_2, $observacion_chuto_estado, $fecha_chuto_estado, $id_sede_chuto, $id_chuto_estado)
	{
		global $database;
		if(!empty($placa_chuto) && !empty($serial_carroceria_chuto) && !empty($serial_motor_chuto) && !empty($id_sede_chuto) && !empty($id_chuto_estado)) 
		{
		
		$sql = "INSERT INTO chuto(placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, color_chuto_1, color_chuto_2, observacion_chuto_estado, fecha_chuto_estado, id_sede_chuto, id_chuto_estado) VALUES (NULL,'".$placa_chuto."','".$placa_nueva_chuto."','".$serial_carroceria_chuto."','".$serial_motor_chuto."','".$marca_chuto."','".$tipo_chuto."','".$modelo_chuto."',".$a_o_chuto.",'".$color_chuto_1."','".$color_chuto_2."','".$observacion_chuto_estado."','".$fecha_chuto_estado."','".$id_sede_chuto."',".$id_chuto_estado.")";

		return self::consulta($sql);
		}
	}
	
	public static function consulta($sql){
		global $database;
		$resultado_listado = $database->query($sql);
		$objeto_array = array();

		while($row = mysqli_fetch_array($resultado_listado)) {

			$objeto_array[] = self::instanciacion($row);

		}

		return $objeto_array;
	}
	
	private static function instanciacion($registro){

		$chuto = new self();

        foreach ($registro as $propiedad => $value) {
        	
        	if($chuto->has_the_attribute($propiedad)) {

        		$chuto->$propiedad = $value;

        	}

        }

        return $chuto;
	}

	private function has_the_attribute($propiedad) {

		$propiedades_objeto = get_object_vars($this);
		return array_key_exists($propiedad, $propiedades_objeto);


	}
}

?>