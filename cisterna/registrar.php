<?php

sleep(2);

include_once("../config/init.php");

$cisterna = new Cisterna();

if (isset($_POST['fecha_cisterna_estado'])) {

    $cisterna->placa_cisterna = $_POST['placa_cisterna'];
    $cisterna->placa_nueva_cisterna = $_POST['placa_nueva_cisterna'];
    $cisterna->serial_carroceria_cisterna = $_POST['serial_carroceria_cisterna'];
    $cisterna->marca_cisterna = $_POST['marca_cisterna'];
    $cisterna->tipo_cisterna = $_POST['tipo_cisterna'];
    $cisterna->modelo_cisterna = $_POST['modelo_cisterna'];
    $cisterna->a_o_cisterna = $_POST['a_o_cisterna'];
    $cisterna->nombre_color_cisterna = $_POST['nombre_color_cisterna'];
    $cisterna->color_cisterna_1 = $_POST['color_cisterna_1'];
    $cisterna->color_cisterna_2 = $_POST['color_cisterna_2'];
    $cisterna->nro_ejes_cisterna = $_POST['nro_ejes_cisterna'];
    $cisterna->capacidad_1erc_cisterna = $_POST['capacidad_1erc_cisterna'];
    $cisterna->capacidad_2doc_cisterna = $_POST['capacidad_2doc_cisterna'];
    $cisterna->capacidad_3erc_cisterna = $_POST['capacidad_3erc_cisterna'];
    $cisterna->capacidad_totalc_cisterna = $_POST['capacidad_totalc_cisterna'];
    $cisterna->observacion_cisterna_estado = $_POST['observacion_cisterna_estado'];
    $cisterna->fecha_cisterna_estado = $_POST['fecha_cisterna_estado'];
    $cisterna->id_sede_cisterna = $_POST['id_sede_cisterna'];
    $cisterna->id_cisterna_estado = $_POST['id_cisterna_estado'];

    $ruta1 = "../img/cisterna/placa/". $_POST['placa_cisterna'].".png";
    $ruta2 = "../img/cisterna/serial_carroceria/". $_POST['serial_carroceria_cisterna'].".png";
    $ruta4 = "../img/cisterna/seguro/". $_POST['placa_cisterna'] . "_seguro.png";
    $ruta5 = "../img/cisterna/titulo/". $_POST['placa_cisterna'] . "_titulo.png";
    
    $cisterna->ruta_imagen_cisterna1 = $ruta1;
    $cisterna->ruta_imagen_cisterna2 = $ruta2;
    $cisterna->ruta_imagen_cisterna4 = $ruta4;
    $cisterna->ruta_imagen_cisterna5 = $ruta5;

    
    $tmp_name1 = $_FILES['foto_placa_cisterna']['tmp_name'];
    $tmp_name2 = $_FILES['foto_serial_carroceria_cisterna']['tmp_name'];
    $tmp_name4 = $_FILES['foto_seguro_cisterna']['tmp_name'];
    $tmp_name5 = $_FILES['foto_titulo_cisterna']['tmp_name'];

    $placa_cisterna = $_POST['placa_cisterna'] . "_placa";
    $serial_carroceria_cisterna = $_POST['placa_cisterna'] . "_" .  $_POST['serial_carroceria_cisterna'] . "_carroceria";
    $seguro = $_POST['placa_cisterna'] . "_seguro";
    $titulo = $_POST['placa_cisterna'] . "_titulo";
    
    $a = "placa";
    $b = "serial_carroceria";
    $d = "seguro";
    $e = "titulo";

    $png = "png";
    $pdf = "pdf";

    if ($cisterna->registrar_cisterna() == 1) {
                
        $cisterna->subir_archivo($tmp_name1, $ruta1, $placa_cisterna, $a, $png);
        $cisterna->subir_archivo($tmp_name2, $ruta2, $serial_carroceria_cisterna, $b, $png);
        $cisterna->subir_archivo($tmp_name4, $ruta4, $seguro, $d, $pdf);
        $cisterna->subir_archivo($tmp_name5, $ruta5, $titulo, $e, $pdf);

        echo '<script type="text/javascript">swal("Exito!", "Registrado!", "success");</script>';
    } else {

       echo '<script type="text/javascript">sweetAlert("Oops...", "La Cisterna ya fue registrada!", "error");</script>';
    }
}
?>