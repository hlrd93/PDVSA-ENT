<?php 
class Conductor {

	public $id_conductor;
	public $cedula_conductor;
	public $nombre_conductor;
	public $apellido_conductor;
	public $fecha_conductor;

	public static function consulta($sql) {
    	global $database;

        $resultado_listado = $database->query($sql);

        $objeto_array = array();

        while ($registro = mysqli_fetch_array($resultado_listado)) {

            $objeto_array[] = self::instanciacion($registro);
        }

        return $objeto_array;
    }

    private static function instanciacion($registro) {

        $chuto = new self();

        foreach ($registro as $propiedad => $value) {

            if ($chuto->tiene_la_propiedad($propiedad)) {

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

    public function registrar_conductor() {
        global $database;

        $sql = "SELECT id_conductor FROM conductor WHERE cedula_conductor='" . $database->escape_string($this->cedula_conductor) . "'";

        $resultado = $database->query($sql);

        if ($resultado->num_rows == 0) {
            $sql = "INSERT INTO conductor(cedula_conductor, nombre_conductor, apellido_conductor, fecha_conductor) ";
            $sql .= "VALUES ('";
            $sql .= $database->escape_string($this->cedula_conductor) . "','";
            $sql .= $database->escape_string($this->nombre_conductor) . "','";
            $sql .= $database->escape_string($this->apellido_conductor) . "','";
            $sql .= $database->escape_string($this->fecha_conductor) . "')";

            if ($database->query($sql)) {
                $this->id_conductor = $database->ultimo_id();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function subir_archivo($tmp_name, $ruta, $nombre, $x, $formato) {

        if(move_uploaded_file($tmp_name, $ruta) == true) {

            rename($ruta, "../img/chuto/".$x."/".$nombre.".".$formato);

            return true;
        } else {
            return false;
        }
    }

} //Fin de Clase Conductor
?>