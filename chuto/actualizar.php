<?php

include_once("../config/init.php");

$chuto = new Chuto();

if (isset($_POST['fecha_chuto_estado'])) {

    $id_chuto = $_POST['id_chuto'];
    $chuto->id_chuto = $id_chuto;
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
    
    $tmp_name1 = $_FILES['foto_placa_chuto']['tmp_name'];
    $tmp_name2 = $_FILES['foto_serial_carroceria_chuto']['tmp_name'];
    $tmp_name3 = $_FILES['foto_serial_motor_chuto']['tmp_name'];
    $tmp_name4 = $_FILES['foto_seguro_chuto']['tmp_name'];
    $tmp_name5 = $_FILES['foto_titulo_chuto']['tmp_name'];

    $ruta1 = "../img/chuto/placa/". $id_chuto ."_placa.png";
    $ruta2 = "../img/chuto/serial_carroceria/". $id_chuto ."_serial_carroceria.png";
    $ruta3 = "../img/chuto/serial_motor/". $id_chuto ."_serial_motor.png";
    $ruta4 = "../img/chuto/seguro/". $id_chuto . "_seguro.pdf";
    $ruta5 = "../img/chuto/titulo/". $id_chuto . "_titulo.pdf";
    
// Carpeta
    
    $a = "placa";
    $b = "serial_carroceria";
    $c = "serial_motor";
    $d = "seguro";
    $e = "titulo";
    
// Nombre de Archivo
    
    $placa_chuto = $id_chuto . "_placa";
    $serial_carroceria_chuto = $id_chuto . "_serial_carroceria";
    $serial_motor_chuto = $id_chuto . "_serial_motor";
    $seguro = $id_chuto . "_seguro";
    $titulo = $id_chuto . "_titulo";
    
// Formato
    
    $png = "png";
    $pdf = "pdf";

    if ($chuto->actualizar_chuto() == true) {
        
        if(!empty($tmp_name1)) {
        $chuto->subir_archivo($tmp_name1, $ruta1,  $a, $placa_chuto, $png);
        }
        if(!empty($tmp_name2)) {
        $chuto->subir_archivo($tmp_name2, $ruta2,  $b, $serial_carroceria_chuto, $png);
        }
        if(!empty($tmp_name3)) {
        $chuto->subir_archivo($tmp_name3, $ruta3,  $c, $serial_motor_chuto, $png);
        }
        if(!empty($tmp_name4)) {
        $chuto->subir_archivo($tmp_name4, $ruta4,  $d, $seguro, $pdf);
        }
        if(!empty($tmp_name5)) {
        $chuto->subir_archivo($tmp_name5, $ruta5,  $e, $titulo, $pdf);
        }
    	echo '<script type="text/javascript">swal("Exito!", "Actualizado!", "success");</script>';
        sleep(1);
        echo '<script type="text/javascript">location.reload(true);</script>';

    } else {

		echo '<script type="text/javascript">sweetAlert("Oops...", "El Chuto no fue Actualizado!", "error");</script>';
    }
}
 
?>