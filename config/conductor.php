<?php

class Conductor {

    public $id_conductor;
    public $cedula_conductor;
    public $nombre_conductor;
    public $apellido_conductor;
    public $fecha_conductor;
    public $nombre_sede;
    public $id_sede_conductor;
    public $id_conductor_estado;
    public $id_conductor_estado_child; /*especificacion*/

    public function actualizar_conductor() {
        global $database;

        $sql = "UPDATE conductor SET ";
        $sql .= "cedula_conductor='" . $database->escape_string($this->cedula_conductor) . "', ";
        $sql .= "nombre_conductor='" . $database->escape_string($this->nombre_conductor) . "', ";
        $sql .= "apellido_conductor='" . $database->escape_string($this->apellido_conductor) . "', ";
        $sql .= "fecha_conductor='" . $database->escape_string($this->fecha_conductor) . "', ";
        $sql .= "id_sede_conductor='" . $database->escape_string($this->id_sede_conductor) . "', ";
        $sql .= "id_conductor_estado='" . $database->escape_string($this->id_conductor_estado) . "', ";
        $sql .= "id_estado_especificacion='" . $database->escape_string($this->id_conductor_estado_child) . "' ";
        $sql .= " WHERE id_conductor=" . $database->escape_string($this->id_conductor);

        $database->query($sql);
        return (mysqli_affected_rows($database->conexion) == 1) ? true : false;
    }

    public static function listar_conductor_byid($c) {
        
        $sql = "SELECT id_conductor, cedula_conductor, nombre_conductor, apellido_conductor, fecha_conductor, ";
        $sql .= "nombre_sede, conductor.id_sede_conductor FROM conductor ";
        $sql .= "INNER JOIN sede ON sede.id_sede = conductor.id_sede_conductor ";
        $sql .= "WHERE id_conductor ='" . $c . "'";
        
        $resultado = self::consulta($sql);
        return !empty($resultado) ? $resultado : false;
    }

    public static function buscar_conductor($c) {

        $string_sql = self::filtro($c);

        $sql = "SELECT * FROM conductor ";
        $sql .= $string_sql;
        $sql .= " ORDER BY id_conductor ASC";

        $resultado = self::consulta($sql);
        return !empty($resultado) ? $resultado : false;
    }

    public static function filtro($c) {
        $parametro[] = "";

        if (!empty($c)) {

            $parametro[0] = "WHERE cedula_conductor ='" . $c . "'";
        }

        return implode(" ", $parametro);
    }

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

        $conductor = new self();

        foreach ($registro as $propiedad => $value) {

            if ($conductor->tiene_la_propiedad($propiedad)) {

                //setter setea el valor de la propiedad de la clase
                $conductor->$propiedad = $value;
            }
        }

        return $conductor;
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
            $sql = "INSERT INTO conductor(cedula_conductor, nombre_conductor, apellido_conductor, fecha_conductor, id_sede_conductor, id_conductor_estado, id_estado_especificacion) ";
            $sql .= "VALUES ('";
            $sql .= $database->escape_string($this->cedula_conductor) . "','";
            $sql .= $database->escape_string($this->nombre_conductor) . "','";
            $sql .= $database->escape_string($this->apellido_conductor) . "','";
            $sql .= $database->escape_string($this->fecha_conductor) . "','";
            $sql .= $database->escape_string($this->id_sede_conductor) . "','";
            $sql .= $database->escape_string($this->id_conductor_estado) . "','";
            $sql .= $database->escape_string($this->id_conductor_estado_child) . "')";

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

    public function subir_archivo($tmp_name, $ruta, $carpeta, $nombre, $formato) {

        if (move_uploaded_file($tmp_name, $ruta) == true) {

            $rutab = "../img/conductor/" . $carpeta . "/" . $nombre . "." . $formato;

            if($ruta != $rutab) {

                rename($ruta, $rutab);

            }

            return true;
        } else {
            return false;
        }
    }

    public function nro_id_conductor() {

        global $database;

        $sql = "SELECT * FROM conductor";
        
        $r = $database->query($sql);

        $x = $r->num_rows;

        $x++;
        
        return $x;
    }

}

//Fin de Clase Conductor