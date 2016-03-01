<?php

sleep(3);

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

    if ($cisterna->registrar_cisterna() == 1) {
        echo '<script type="text/javascript">swal("Exito!", "Registrado!", "success");</script>';
    } else {

        echo '<script type="text/javascript">sweetAlert("Oops...", "La Cisterna ya fue registrada!", "error");</script>';
    }
}
?>