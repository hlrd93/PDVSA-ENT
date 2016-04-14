<?php

include_once("../config/init.php");

$cisterna = new Cisterna();

if (isset($_POST['fecha_cisterna_estado'])) {

	$id_cisterna = $_POST['id_cisterna'];
    $cisterna->id_cisterna = $id_cisterna;
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

	$tmp_name1 = $_FILES['foto_placa_cisterna']['tmp_name'];
	$tmp_name2 = $_FILES['foto_serial_carroceria_cisterna']['tmp_name'];
	$tmp_name4 = $_FILES['foto_seguro_cisterna']['tmp_name'];
	$tmp_name5 = $_FILES['foto_titulo_cisterna']['tmp_name'];

	$ruta1 = "../img/cisterna/placa/". $id_cisterna."_placa.png";
	$ruta2 = "../img/cisterna/serial_carroceria/". $id_cisterna."_serial_carroceria.png";
	$ruta4 = "../img/cisterna/seguro/". $id_cisterna . "_seguro.pdf";
	$ruta5 = "../img/cisterna/titulo/". $id_cisterna . "_titulo.pdf";

// Carpeta

	$a = "placa";
	$b = "serial_carroceria";
	$d = "seguro";
	$e = "titulo";

// Nombre de Archivo

	$placa_cisterna = $id_cisterna . "_placa";
	$serial_carroceria_cisterna = $id_cisterna . "_serial_carroceria";
	$seguro = $id_cisterna . "_seguro";
	$titulo = $id_cisterna . "_titulo";

// Formato

	$png = "png";
	$pdf = "pdf";

    if ($cisterna->actualizar_cisterna() == true) {
        
        if(!empty($tmp_name1)) {
        $cisterna->subir_archivo($tmp_name1, $ruta1,  $a, $placa_cisterna, $png);
        }
        if(!empty($tmp_name2)) {
        $cisterna->subir_archivo($tmp_name2, $ruta2,  $b, $serial_carroceria_cisterna, $png);
        }
        if(!empty($tmp_name4)) {
        $cisterna->subir_archivo($tmp_name4, $ruta4,  $d, $seguro, $pdf);
        }
        if(!empty($tmp_name5)) {
        $cisterna->subir_archivo($tmp_name5, $ruta5,  $e, $titulo, $pdf);
        }
    	echo '<script type="text/javascript">swal("Exito!", "Actualizado!", "success");</script>';
        sleep(1);
        echo '<script type="text/javascript">location.reload(true);</script>';

    } else {

		echo '<script type="text/javascript">sweetAlert("Oops...", "La Cisterna no fue Actualizada!", "error");</script>';
    }
}
?>