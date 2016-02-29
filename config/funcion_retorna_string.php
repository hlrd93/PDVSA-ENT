<?php 
require_once("init.php");
// $resultado = Chuto::casos("","ar","ar","ar");
$sede = "sc";
$estatus = "ACTIVO";
$tipo = "420";
$a_o = "2013";

$string_sql = Chuto::filtro($sede, $estatus, $tipo, $a_o);

echo $string_sql;
?>