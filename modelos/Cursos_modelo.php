<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class curso
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Método para insertar registros
	public function insertarC($name, $group, $description, $grade)
	{
		$sql="INSERT INTO cursos (course_name, course_group, course_description, grade)
		VALUES ('$name', '$group', '$description', '$grade')";
		return ejecutarConsulta($sql);
	}

	//Método para editar registros
	public function editarC($id_course,$name, $group, $description, $grade)
	{
		$sql="UPDATE cursos SET course_name='$name', course_group='$group', course_description='$description', grade='$grade'  WHERE id_course='$id_course'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar1 los datos de un registro a modificar
	public function mostrarC($id_course)
	{
		$sql="SELECT * FROM cursos WHERE id_course='$id_course'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Implementar un método para listar1 los registros
	public function listarC()
	{
		$sql="SELECT * FROM ";
		return ejecutarConsulta($sql);		
	}
}

?>