<?php 

class crud{
	public function agregar($datos){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into t_gastos (concepto,cantidad,fecha)
		values ('$datos[0]',
		'$datos[1]',
		'$datos[2]')";
		return mysqli_query($conexion,$sql);
	}

	public function obtenDatos($idgastos){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="SELECT id_gastos,
		concepto,
		cantidad,
		fecha
		from t_gastos 
		where id_gastos='$idgastos'";
		$result=mysqli_query($conexion,$sql);
		$ver=mysqli_fetch_row($result);

		$datos=array(
			'id_gastos' => $ver[0],
			'concepto' => $ver[1],
			'cantidad' => $ver[2],
			'fecha' => $ver[3]
		);
		return $datos;
	}

	public function actualizar($datos){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE t_gastos set concepto='$datos[0]',
		cantidad='$datos[1]',
		fecha='$datos[2]'
		where id_gastos='$datos[3]'";
		return mysqli_query($conexion,$sql);
	}
	public function eliminar($idgastos){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="DELETE from t_gastos where id_gastos='$idgastos'";
		return mysqli_query($conexion,$sql);
	}
}

?>