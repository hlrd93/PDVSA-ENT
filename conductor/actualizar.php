<?php

include_once("../config/init.php");

$conductor = new Conductor();

if (isset($_POST['cedula_conductor'])) {

    $id_conductor = $_POST['id_conductor'];
    $conductor->id_conductor = $id_conductor;
    $conductor->cedula_conductor = $_POST['cedula_conductor'];
    $conductor->nombre_conductor = $_POST['nombre_conductor'];
    $conductor->apellido_conductor = $_POST['apellido_conductor'];
    $conductor->fecha_conductor = $_POST['fecha_conductor'];
    $conductor->id_sede_conductor = $_POST['id_sede_conductor'];
    $conductor->id_conductor_estado = $_POST['id_conductor_estado'];
    $conductor->id_conductor_estado_child = $_POST['id_conductor_estado_child'];
    
    $tmp_name1 = $_FILES['foto_cedula']['tmp_name'];
    $tmp_name2 = $_FILES['foto_carnet']['tmp_name'];
    $tmp_name3 = $_FILES['foto_certificado_medico']['tmp_name'];
    $tmp_name4 = $_FILES['foto_licencia']['tmp_name'];

    $ruta1 = "../img/conductor/cedula/" . $id_conductor . "_cedula.png";
    $ruta2 = "../img/conductor/carnet/" . $id_conductor . "_carnet.png";
    $ruta3 = "../img/conductor/certificado_medico/" . $id_conductor . "_certificado_medico.png";
    $ruta4 = "../img/conductor/licencia/" . $id_conductor . "_licencia.png";

// Carpeta

    $a = "cedula";
    $b = "carnet";
    $c = "certificado_medico";
    $d = "licencia";

// Nombre

    $cedula = $id_conductor . "_cedula";
    $carnet = $id_conductor . "_carnet";
    $certificado_medico = $id_conductor . "_certificado_medico";
    $licencia = $id_conductor . "_licencia";

// Formato

    $png = "png";
    // $pdf = "pdf";

    if ($conductor->actualizar_conductor() == true) {

    	if(!empty($tmp_name1)) {
		$conductor->subir_archivo($tmp_name1, $ruta1,  $a, $cedula, $png);
		}
		if(!empty($tmp_name2)) {
		$conductor->subir_archivo($tmp_name2, $ruta2,  $b, $carnet, $png);
		}
		if(!empty($tmp_name3)) {
		$conductor->subir_archivo($tmp_name3, $ruta3,  $c, $certificado_medico, $png);
		}
		if(!empty($tmp_name4)) {
		$conductor->subir_archivo($tmp_name4, $ruta4,  $d, $licencia, $png);
		}

        echo '<script type="text/javascript">swal("Exito!", "Actualizado!", "success");</script>';
    
    } else {

        echo '<script type="text/javascript">sweetAlert("Oops...", "El Conductor no fue Actualizado!", "error");</script>';
    }
}
?>