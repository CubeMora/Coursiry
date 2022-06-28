<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class usuario
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Método para insertar registros
	public function insertarU($nombre, $apodo, $password, $age, $usertype)
	{
		$sql="INSERT INTO users (realname, username, pass, age, usertype)
		VALUES ('$nombre', '$apodo', '$password', '$age', '$usertype')";
		return ejecutarConsulta($sql);
	}

	//Método para editar registros
	public function editarU($id_user,$nombre, $apodo, $password, $age, $usertype)
	{
		$sql="UPDATE users SET realname='$nombre', username='$apodo', pass='$password', age='$age', usertype='$usertype'  WHERE id_user='$id_user'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar1 los datos de un registro a modificar
	public function mostrarU($id_user)
	{
		$sql="SELECT * FROM users WHERE id_user='$id_user'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Implementar un método para listar1 los registros
	public function listarU()
	{
		$sql="SELECT * FROM users";
		return ejecutarConsulta($sql);		
	}
}

?>