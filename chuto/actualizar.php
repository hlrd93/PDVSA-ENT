<?php 

$id = $_POST['id'];

sleep(2);

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

    if ($chuto->registrar_chuto() == 1) {
                
        $chuto->subir_archivo($tmp_name1, $ruta1, $placa_chuto, $a, $png);
        $chuto->subir_archivo($tmp_name2, $ruta2, $serial_carroceria_chuto, $b, $png);
        $chuto->subir_archivo($tmp_name3, $ruta3, $serial_motor_chuto, $c, $png);
        $chuto->subir_archivo($tmp_name4, $ruta4, $seguro, $d, $pdf);
        $chuto->subir_archivo($tmp_name5, $ruta5, $titulo, $e, $pdf);

        echo '<script type="text/javascript">swal("Exito!", "Registrado!", "success");</script>';
    } else {

        echo '<script type="text/javascript">sweetAlert("Oops...", "El Chuto ya fue registrado!", "error");</script>';
    }
}

echo "Chuto " . $id;

 ?>