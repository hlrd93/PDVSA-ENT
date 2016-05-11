<?php 

include_once '../config/init.php';

$pizarra = new Pizarra();

$pizarra->nro_chuto();
$chuto = $pizarra->nro_chuto;

$pizarra->nro_cisterna();
$cisterna = $pizarra->nro_cisterna;

$pizarra->nro_conductor();
$conductor = $pizarra->nro_conductor;

header("Content-Type: application/json", true);

$chuto_array = array( 
					array(
						"chuto" => $chuto, 
						"cisterna" => $cisterna,
						"conductor" => $conductor
						)
					);

echo(json_encode($chuto_array));

?>