<?php
sleep(2);

include_once("../config/init.php");

$conductor = new Conductor();

if (isset($_POST['cedula_conductor'])) {

    $conductor->cedula_conductor = $_POST['cedula_conductor'];
    $conductor->nombre_conductor = $_POST['nombre_conductor'];
    $conductor->apellido_conductor = $_POST['apellido_conductor'];
    $conductor->fecha_conductor = $_POST['fecha_conductor'];
    $conductor->id_conductor_estado = $_POST['id_conductor_estado'];
    $conductor->id_sede_conductor = $_POST['id_sede_conductor'];
    
    $ruta1 = "../img/conductor/cedula/". $_POST['cedula_conductor']."_cedula.png";
    $ruta2 = "../img/conductor/carnet/". $_POST['cedula_conductor']."_carnet.png";
    $ruta3 = "../img/conductor/certificado_medico/". $_POST['cedula_conductor']."_certificado_medico.png";
    $ruta4 = "../img/conductor/licencia/". $_POST['cedula_conductor'] . "_licencia.png";
    
    $conductor->ruta_imagen_conductor1 = $ruta1;
    $conductor->ruta_imagen_conductor2 = $ruta2;
    $conductor->ruta_imagen_conductor3 = $ruta3;
    $conductor->ruta_imagen_conductor4 = $ruta4;
    
    $tmp_name1 = $_FILES['foto_cedula']['tmp_name'];
    $tmp_name2 = $_FILES['foto_carnet']['tmp_name'];
    $tmp_name3 = $_FILES['foto_certificado_medico']['tmp_name'];
    $tmp_name4 = $_FILES['foto_licencia']['tmp_name'];

    $cedula = $_POST['cedula_conductor'] . "_cedula";
    $carnet = $_POST['cedula_conductor'] . "_carnet";
    $certificado_medico = $_POST['cedula_conductor'] . "_certificado_medico";
    $licencia = $_POST['cedula_conductor'] . "_licencia";
    
    $a = "cedula";
    $b = "carnet";
    $c = "certificado_medico";
    $d = "licencia";

    $png = "png";
//  $pdf = "pdf";

    if ($conductor->registrar_conductor() == true) {

    	if(!empty($tmp_name1)) {
		$conductor->subir_archivo($tmp_name1, $ruta1, $cedula, $a, $png);
		}
		if(!empty($tmp_name2)) {
		$conductor->subir_archivo($tmp_name2, $ruta2, $carnet, $b, $png);
		}
		if(!empty($tmp_name3)) {
		$conductor->subir_archivo($tmp_name3, $ruta3, $certificado_medico, $c, $png);
		}
		if(!empty($tmp_name4)) {
		$conductor->subir_archivo($tmp_name4, $ruta4, $licencia, $d, $png);
		}
        echo '<script type="text/javascript">swal("Exito!", "Registrado!", "success");</script>';
    } else {

        echo '<script type="text/javascript">sweetAlert("Oops...", "El Conductor ya fue registrado!", "error");</script>';
    }
}
?>