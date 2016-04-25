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
    public $id_sede_chuto;
    public $id_chuto_estado;

    public function actualizar_chuto() {
        global $database;

        $sql = "UPDATE chuto SET ";
        $sql .= "placa_chuto='" . $database->escape_string($this->placa_chuto) . "', ";
        $sql .= "placa_nueva_chuto='" . $database->escape_string($this->placa_nueva_chuto) . "', ";
        $sql .= "serial_carroceria_chuto='" . $database->escape_string($this->serial_carroceria_chuto) . "', ";
        $sql .= "serial_motor_chuto='" . $database->escape_string($this->serial_motor_chuto) . "', ";
        $sql .= "marca_chuto='" . $database->escape_string($this->marca_chuto) . "', ";
        $sql .= "tipo_chuto='" . $database->escape_string($this->tipo_chuto) . "', ";
        $sql .= "modelo_chuto='" . $database->escape_string($this->modelo_chuto) . "', ";
        $sql .= "a_o_chuto='" . $database->escape_string($this->a_o_chuto) . "', ";
        $sql .= "nombre_color_chuto='" . $database->escape_string($this->nombre_color_chuto) . "', ";
        $sql .= "color_chuto_1='" . $database->escape_string($this->color_chuto_1) . "', ";
        $sql .= "observacion_chuto_estado='" . $database->escape_string($this->observacion_chuto_estado) . "', ";
        $sql .= "fecha_chuto_estado='" . $database->escape_string($this->fecha_chuto_estado) . "', ";
        $sql .= "id_sede_chuto='" . $database->escape_string($this->id_sede_chuto) . "', ";
        $sql .= "id_chuto_estado='" . $database->escape_string($this->id_chuto_estado) . "' ";
        $sql .= " WHERE id_chuto=" . $database->escape_string($this->id_chuto);

        $database->query($sql);
        return (mysqli_affected_rows($database->conexion) == 1) ? true : false;
    }

    public static function listar_chuto_byid($id) {
        $sql = "SELECT id_chuto, placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, ";
        $sql .= "serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, ";
        $sql .= "nombre_color_chuto, color_chuto_1, observacion_chuto_estado, ";
        $sql .= "fecha_chuto_estado, nombre_sede, chuto_estado, chuto.id_sede_chuto, chuto.id_chuto_estado ";
        $sql .= "FROM chuto INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto ";
        $sql .= "INNER JOIN chuto_estado ON chuto_estado.id_chuto_estado = chuto.id_chuto_estado WHERE id_chuto ='" . $id . "'";
        $resultado = self::consulta($sql);
        return !empty($resultado) ? $resultado : false;
    }

    public static function listar_chutos() {
        $sql = "SELECT id_chuto, placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, ";
        $sql .= "serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, ";
        $sql .= "nombre_color_chuto, color_chuto_1, observacion_chuto_estado, ";
        $sql .= "fecha_chuto_estado, nombre_sede, chuto_estado ";
        $sql .= "FROM chuto INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto ";
        $sql .= "INNER JOIN chuto_estado ON chuto_estado.id_chuto_estado = chuto.id_chuto_estado ORDER BY id_chuto ASC";
        $resultado = self::consulta($sql);
        return !empty($resultado) ? $resultado : false;
    }

    public static function buscar_chutos($placa, $serial, $sede, $estatus, $tipo, $a_o) {
        $string_sql = self::filtro($placa, $serial, $sede, $estatus, $tipo, $a_o);
        $sql = "SELECT id_chuto, placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, ";
        $sql .= "serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, ";
        $sql .= "nombre_color_chuto, color_chuto_1, observacion_chuto_estado, ";
        $sql .= "fecha_chuto_estado, nombre_sede, chuto_estado ";
        $sql .= "FROM chuto INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto ";
        $sql .= "INNER JOIN chuto_estado ON chuto_estado.id_chuto_estado = chuto.id_chuto_estado ";
        $sql .= "WHERE a_o_chuto>1900 ";
        $sql .= $string_sql;
        $sql .= " ORDER BY id_chuto ASC";

        $resultado = self::consulta($sql);
        return !empty($resultado) ? $resultado : false;
    }

    public static function filtro($p, $sr, $sd, $e, $t, $a) {
        $parametro[] = "";
        if (!empty($p)) {

            $parametro[0] = "AND placa_chuto ='" . $p . "' OR placa_nueva_chuto ='" . $p . "'";
        }
        if (!empty($sr)) {

            $parametro[1] = "AND serial_carroceria_chuto ='" . $sr . "' OR serial_motor_chuto ='" . $sr . "'";
        }

        if (!empty($sd)) {

            $parametro[2] = "AND nombre_sede ='" . $sd . "'";
        }
        if (!empty($e)) {

            $parametro[3] = "AND chuto_estado ='" . $e . "'";
        }
        if (!empty($t)) {

            $parametro[4] = "AND tipo_chuto ='" . $t . "'";
        }
        if (!empty($a)) {

            $parametro[5] = "AND a_o_chuto ='" . $a . "'";
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

    public function registrar_chuto() {
        global $database;

        $sql = "SELECT id_chuto FROM chuto WHERE serial_carroceria_chuto='" . $database->escape_string($this->serial_carroceria_chuto) . "' OR placa_chuto='" . $database->escape_string($this->placa_chuto) . "'";

        $resultado = $database->query($sql);

        if ($resultado->num_rows == 0) {
            $sql = "INSERT INTO chuto(id_chuto, placa_chuto, placa_nueva_chuto, serial_carroceria_chuto, ";
            $sql .= "serial_motor_chuto, marca_chuto, tipo_chuto, modelo_chuto, a_o_chuto, ";
            $sql .= "nombre_color_chuto, color_chuto_1, observacion_chuto_estado, fecha_chuto_estado, ";
            $sql .= "id_sede_chuto, id_chuto_estado) ";
            $sql .= "VALUES ('";
            $sql .= $database->escape_string($this->id_chuto) . "','";
            $sql .= $database->escape_string($this->placa_chuto) . "','";
            $sql .= $database->escape_string($this->placa_nueva_chuto) . "','";
            $sql .= $database->escape_string($this->serial_carroceria_chuto) . "','";
            $sql .= $database->escape_string($this->serial_motor_chuto) . "','";
            $sql .= $database->escape_string($this->marca_chuto) . "','";
            $sql .= $database->escape_string($this->tipo_chuto) . "','";
            $sql .= $database->escape_string($this->modelo_chuto) . "','";
            $sql .= $database->escape_string($this->a_o_chuto) . "','";
            $sql .= $database->escape_string($this->nombre_color_chuto) . "','";
            $sql .= $database->escape_string($this->color_chuto_1) . "','";
            $sql .= $database->escape_string($this->observacion_chuto_estado) . "','";
            $sql .= $database->escape_string($this->fecha_chuto_estado) . "','";
            $sql .= $database->escape_string($this->id_sede_chuto) . "','";
            $sql .= $database->escape_string($this->id_chuto_estado) . "')";

            if ($database->query($sql)) {
                $this->id_chuto = $database->ultimo_id();
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

            $rutab = "../img/chuto/" . $carpeta . "/" . $nombre . "." . $formato;
            
            if($ruta != $rutab){

                rename($ruta, $rutab);
            
            }

            return true;
        } else {
            return false;
        }
    }

    public function nro_id_chuto() {

        global $database;

        $sql = "SELECT * FROM chuto";
        
        $r = $database->query($sql);

        $x = $r->num_rows;

        $x++;
        
        return $x;
    }

}

//Fin de Clase Chuto

