<?php 

class Cisterna {
	
	public function listar_cisterna()
	{
		global $database;
		$sql = "SELECT * FROM cisterna INNER JOIN sede ON sede.id_sede = cisterna.id_sede_cisterna INNER JOIN cisterna_estado ON cisterna_estado.id_cisterna_estado = cisterna.id_cisterna_estado";
		$resultado_listado = $database->query($sql);
		return $resultado_listado;
	}
}

?>