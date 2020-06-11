<?php 
	class Conexion {
		public static function conectar() {
			$conexion = new MySQLi('localhost','root','','crud');
			return $conexion;
		}
	}
?>