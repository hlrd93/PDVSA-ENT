<?php
sleep(2);

include_once("../config/init.php");

$conductor = new Conductor();

if (isset($_POST['cedula_conductor'])) {

    $conductor->cedula_conductor = $_POST['cedula_conductor'];
    $conductor->nombre_conductor = $_POST['nombre_conductor'];
    $conductor->apellido_conductor = $_POST['apellido_conductor'];
    $conductor->fecha_conductor = $_POST['fecha_conductor'];
    
    $ruta1 = "../img/chuto/placa/". $_POST['placa_chuto'].".png";
    $ruta2 = "../img/chuto/serial_carroceria/". $_POST['serial_carroceria_chuto'].".png";
    $ruta3 = "../img/chuto/serial_motor/". $_POST['serial_motor_chuto'].".png";
    $ruta4 = "../img/chuto/seguro/". $_POST['placa_chuto'] . "_seguro.pdf";
    $ruta5 = "../img/chuto/titulo/". $_POST['placa_chuto'] . "_titulo.pdf";
    
    $chuto->ruta_imagen_chuto1 = $ruta1;
    $chuto->ruta_imagen_chuto2 = $ruta2;
    $chuto->ruta_imagen_chuto3 = $ruta3;
    $chuto->ruta_imagen_chuto4 = $ruta4;
    $chuto->ruta_imagen_chuto5 = $ruta5;

    
    $tmp_name1 = $_FILES['foto_placa_chuto']['tmp_name'];
    $tmp_name2 = $_FILES['foto_serial_carroceria_chuto']['tmp_name'];
    $tmp_name3 = $_FILES['foto_serial_motor_chuto']['tmp_name'];
    $tmp_name4 = $_FILES['foto_seguro_chuto']['tmp_name'];
    $tmp_name5 = $_FILES['foto_titulo_chuto']['tmp_name'];

    $placa_chuto = $_POST['placa_chuto'] . "_placa";
    $serial_carroceria_chuto = $_POST['placa_chuto'] . "_" . $_POST['serial_carroceria_chuto'] . "_carroceria";
    $serial_motor_chuto = $_POST['placa_chuto'] . "_" . $_POST['serial_motor_chuto'] . "_motor";
    $seguro = $_POST['placa_chuto'] . "_seguro";
    $titulo = $_POST['placa_chuto'] . "_titulo";
    
    $a = "placa";
    $b = "serial_carroceria";
    $c = "serial_motor";
    $d = "seguro";
    $e = "titulo";

    $png = "png";
    $pdf = "pdf";

    if ($conductor->registrar_conductor() == true) {
                
/*        $chuto->subir_archivo($tmp_name1, $ruta1, $placa_chuto, $a, $png);
        $chuto->subir_archivo($tmp_name2, $ruta2, $serial_carroceria_chuto, $b, $png);
        $chuto->subir_archivo($tmp_name3, $ruta3, $serial_motor_chuto, $c, $png);
        $chuto->subir_archivo($tmp_name4, $ruta4, $seguro, $d, $pdf);
        $chuto->subir_archivo($tmp_name5, $ruta5, $titulo, $e, $pdf);*/

        echo '<script type="text/javascript">swal("Exito!", "Registrado!", "success");</script>';
    } else {

        echo '<script type="text/javascript">sweetAlert("Oops...", "El Conductor ya fue registrado!", "error");</script>';
    }
}
?>