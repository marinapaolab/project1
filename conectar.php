<?php

	class conect{
		const dbhost='localhost';  // host del MySQL 
		const dbusuario='root'; // aqui debes ingresar el nombre de usuario para acceder a la base
		const dbpassword=''; // password de acceso para el usuario
      //public $db;        // Seleccionamos la base con la cual trabajar
		public $conectar;
		public $seleccionar;
		function conectar(){
			global $conectar;
			$this-> conectar = mysql_connect(self::dbhost, self::dbusuario, self::dbpassword) or die (mysql_error());
			$seleccionar = mysql_select_db("usuarios", $this->conectar) or die (mysql_error());
		
			/*if($this->seleccionar) {
			echo("Se ha establecido conexion");
			}else {
				echo("Se ha establecido conexion");
			}
	}*/
}

}
$v= new conect();
$v-> conectar();
?>