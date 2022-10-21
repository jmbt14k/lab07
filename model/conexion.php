<?php 
$contrasena = "0O2zyUfl3%1u";
$usuario = "grupo11";
$nombre_bd = "crud";

try {
	$bd = new PDO (
		'mysql:host=bdmysql.testing-apps.com;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>
