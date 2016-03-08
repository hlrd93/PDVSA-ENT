<?php

class Cisterna {

    public $id_cisterna;
    public $placa_cisterna;
    public $placa_nueva_cisterna;
    public $serial_carroceria_cisterna;
    public $marca_cisterna;
    public $tipo_cisterna;
    public $modelo_cisterna;
    public $a_o_cisterna;
    public $nombre_color_cisterna;
    public $color_cisterna_1;
    public $color_cisterna_2;
    public $nro_ejes_cisterna;
    public $capacidad_1erc_cisterna;
    public $capacidad_2doc_cisterna;
    public $capacidad_3erc_cisterna;
    public $capacidad_totalc_cisterna;
    public $observacion_cisterna_estado;
    public $fecha_cisterna_estado;
    public $nombre_sede;
    public $cisterna_estado;

    public function listar_cisternas() {
        global $database;
        $sql = "SELECT id_cisterna, placa_cisterna, placa_nueva_cisterna, serial_carroceria_cisterna, marca_cisterna, tipo_cisterna, modelo_cisterna, a_o_cisterna, nombre_color_cisterna,color_cisterna_1, color_cisterna_2, nro_ejes_cisterna, capacidad_1erc_cisterna, capacidad_2doc_cisterna, capacidad_3erc_cisterna, capacidad_totalc_cisterna, observacion_cisterna_estado, fecha_cisterna_estado, nombre_sede, cisterna_estado FROM cisterna INNER JOIN sede ON sede.id_sede = cisterna.id_sede_cisterna INNER JOIN cisterna_estado ON cisterna_estado.id_cisterna_estado = cisterna.id_cisterna_estado ORDER BY id_cisterna ASC";

        $resultado = self::consulta($sql);
        return !empty($resultado) ? $resultado : false;
    }

    public static function buscar_cisternas($placa, $serial, $sede, $estatus, $tipo, $a_o) {
        $string_sql = self::filtro($placa, $serial, $sede, $estatus, $tipo, $a_o);

        global $database;
        $sql = "SELECT id_cisterna, placa_cisterna, placa_nueva_cisterna, serial_carroceria_cisterna, ";
        $sql .= "marca_cisterna, tipo_cisterna, modelo_cisterna, a_o_cisterna, ";
        $sql .= "nombre_color_cisterna, color_cisterna_1, color_cisterna_2, nro_ejes_cisterna, capacidad_1erc_cisterna, ";
        $sql .= "capacidad_2doc_cisterna, capacidad_3erc_cisterna, capacidad_totalc_cisterna, observacion_cisterna_estado, ";
        $sql .= "fecha_cisterna_estado, nombre_sede, cisterna_estado ";
        $sql .= "FROM cisterna INNER JOIN sede ON sede.id_sede = cisterna.id_sede_cisterna ";
        $sql .= "INNER JOIN cisterna_estado ON cisterna_estado.id_cisterna_estado = cisterna.id_cisterna_estado ";
        $sql .= "WHERE a_o_cisterna>1900 ";
        $sql .= $string_sql;
        $sql .= " ORDER BY id_cisterna ASC";

        $resultado = self::consulta($sql);
        return !empty($resultado) ? $resultado : false;
    }

    public static function filtro($p, $sr, $sd, $e, $t, $a) {
        $parametro[] = "";
        if (!empty($p)) {

            $parametro[0] = "AND placa_cisterna ='" . $p . "' OR placa_nueva_cisterna ='" . $p . "'";
        }
        if (!empty($sr)) {

            $parametro[1] = "AND serial_carroceria_cisterna ='" . $sr . "'";
        }

        if (!empty($sd)) {

            $parametro[2] = "AND nombre_sede ='" . $sd . "'";
        }
        if (!empty($e)) {

            $parametro[3] = "AND cisterna_estado ='" . $e . "'";
        }
        if (!empty($t)) {

            $parametro[4] = "AND tipo_cisterna ='" . $t . "'";
        }
        if (!empty($a)) {

            $parametro[3] = "AND a_o_cisterna ='" . $a . "'";
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

        $cisterna = new self();

        foreach ($registro as $propiedad => $value) {

            if ($cisterna->tiene_la_propiedad($propiedad)) {

                //setter setea el valor de la propiedad de la clase
                $cisterna->$propiedad = $value;
            }
        }

        return $cisterna;
    }

    private function tiene_la_propiedad($propiedad) {

        $propiedades_objeto = get_object_vars($this);
        return array_key_exists($propiedad, $propiedades_objeto);
    }

    public function registrar_cisterna() {
        global $database;

        $sql = "SELECT * FROM cisterna WHERE serial_carroceria_cisterna='" . $database->escape_string($this->serial_carroceria_cisterna) . "' OR placa_cisterna='" . $database->escape_string($this->placa_cisterna) . "'";

        $resultado = $database->query($sql);

        if ($resultado->num_rows == 0) {
            $sql = "INSERT INTO cisterna(placa_cisterna, placa_nueva_cisterna, serial_carroceria_cisterna, ";
            $sql .= " marca_cisterna, tipo_cisterna, modelo_cisterna, a_o_cisterna, ";
            $sql .= "nombre_color_cisterna, color_cisterna_1, color_cisterna_2, nro_ejes_cisterna, capacidad_1erc_cisterna, ";
            $sql .= "capacidad_2doc_cisterna, capacidad_3erc_cisterna, capacidad_totalc_cisterna, ";
            $sql .= "observacion_cisterna_estado, fecha_cisterna_estado, ";
            $sql .= "id_sede_cisterna, id_cisterna_estado) ";
            $sql .= "VALUES ('";
            $sql .= $database->escape_string($this->placa_cisterna) . "','";
            $sql .= $database->escape_string($this->placa_nueva_cisterna) . "','";
            $sql .= $database->escape_string($this->serial_carroceria_cisterna) . "','";
            $sql .= $database->escape_string($this->marca_cisterna) . "','";
            $sql .= $database->escape_string($this->tipo_cisterna) . "','";
            $sql .= $database->escape_string($this->modelo_cisterna) . "','";
            $sql .= $database->escape_string($this->a_o_cisterna) . "','";
            $sql .= $database->escape_string($this->nombre_color_cisterna) . "','";
            $sql .= $database->escape_string($this->color_cisterna_1) . "','";
            $sql .= $database->escape_string($this->color_cisterna_2) . "','";
            $sql .= $database->escape_string($this->nro_ejes_cisterna) . "','";
            $sql .= $database->escape_string($this->capacidad_1erc_cisterna) . "','";
            $sql .= $database->escape_string($this->capacidad_2doc_cisterna) . "','";
            $sql .= $database->escape_string($this->capacidad_3erc_cisterna) . "','";
            $sql .= $database->escape_string($this->capacidad_totalc_cisterna) . "','";
            $sql .= $database->escape_string($this->observacion_cisterna_estado) . "','";
            $sql .= $database->escape_string($this->fecha_cisterna_estado) . "','";
            $sql .= $database->escape_string($this->id_sede_cisterna) . "','";
            $sql .= $database->escape_string($this->id_cisterna_estado) . "')";

            if ($database->query($sql)) {
                $this->id_cisterna = $database->ultimo_id();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function subir_archivo($tmp_name, $ruta, $nombre, $x) {

        if(move_uploaded_file($tmp_name, $ruta) == true) {

            rename($ruta, "../img/cisterna/".$x."/".$nombre.".png");

            return true;
        } else {
            return false;
        }
    }

}

//Fin de Clase Cisterna
?>