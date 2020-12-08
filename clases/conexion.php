<?php 
	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'root',
										'',
										'gastos');
			return $conexion;
		}
	}
 ?>