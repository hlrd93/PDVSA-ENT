SELECT * FROM chuto
INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto
INNER JOIN distrito ON distrito.id_distrito = sede.id_distrito_sede
WHERE chuto.placa_chuto = '723919';

SELECT * FROM chuto
INNER JOIN sede ON sede.id_sede = chuto.id_sede_chuto
INNER JOIN chuto_estado ON chuto_estado.id_chuto_estado = chuto.id_chuto_estado;



USE `pdvsa_ent_aycg`;
DELIMITER $$
CREATE TRIGGER `chuto_estado_BUPD` BEFORE UPDATE ON `chuto_estado` FOR EACH ROW
BEGIN

INSERT INTO chuto_estado_modificaciones(nro_chuto_estado, id_chuto_estado, estado_chuto_estado, observacion_chuto_estado,fecha_chuto_estado) values(NULL, OLD.id_chuto_estado, OLD.estado_chuto_estado, OLD.observacion_chuto_estado, OLD.fecha_chuto_estado); 

END

