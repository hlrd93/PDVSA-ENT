<?php
sleep(3);

include_once("../config/init.php");

$chuto = new Chuto();

if (isset($_POST['fecha_chuto_estado'])) {

    $chuto->placa_chuto = $_POST['placa_chuto'];
    $chuto->placa_nueva_chuto = $_POST['placa_nueva_chuto'];
    $chuto->serial_carroceria_chuto = $_POST['serial_carroceria_chuto'];
    $chuto->serial_motor_chuto = $_POST['serial_motor_chuto'];
    $chuto->marca_chuto = $_POST['marca_chuto'];
    $chuto->tipo_chuto = $_POST['tipo_chuto'];
    $chuto->modelo_chuto = $_POST['modelo_chuto'];
    $chuto->a_o_chuto = $_POST['a_o_chuto'];
    $chuto->nombre_color_chuto = $_POST['nombre_color_chuto'];
    $chuto->color_chuto_1 = $_POST['color_chuto_1'];
    $chuto->observacion_chuto_estado = $_POST['observacion_chuto_estado'];
    $chuto->fecha_chuto_estado = $_POST['fecha_chuto_estado'];
    $chuto->id_sede_chuto = $_POST['id_sede_chuto'];
    $chuto->id_chuto_estado = $_POST['id_chuto_estado'];

    if ($chuto->registrar_chuto() == 1) {
        echo '<script type="text/javascript">swal("Exito!", "Registrado!", "success");</script>';
    } else {

        echo '<script type="text/javascript">sweetAlert("Oops...", "El Chuto ya fue registrado!", "error");</script>';
    }
}
?>