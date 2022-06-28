<?php 
session_start();
require_once "../modelos/Cursos_modelo.php";

$curso=new curso();

$id_course=isset($_POST["id_course"])? limpiarCadena($_POST["id_course"]):"";
$nombre=isset($_POST["course_name"])? limpiarCadena($_POST["course_name"]):"";
$group=isset($_POST["course_group"])? limpiarCadena($_POST["course_group"]):"";
$description=isset($_POST["course_description"])? limpiarCadena($_POST["course_description"]):"";
$grade=isset($_POST["grade"])? limpiarCadena($_POST["grade"]):"";



switch ($_GET["op"]){
	case 'guardaryeditarC':

       /*
		if (!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name']))
		{
			$foto=$_POST["ia5"];
		}
		else 
		{
			$ext = explode(".", $_FILES["foto"]["name"]);
			if ($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png")
			{
				$foto = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["foto"]["tmp_name"], "../stuff/sitio/" . $foto);
			}
		}
		*/
		if (empty($id_course)){
			$rspta=$curso->insertarC($nombre, $grupo, $descripcion, $grade);
			echo $rspta ? "Usuario Registrado" : "Usuario no se pudo registrar";
		}
		else {
			$rspta=$curso->editarC($id_course,$nombre, $grupo, $descripcion, $grade);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'mostrarC':
		$rspta=$curso->mostrarC($id_course);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;
	break;

	case 'listarC':
		$rspta=$curso->listarC();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrarC('.$reg->id_course.')"><i class="fas fa-pencil-alt"></i></button>',
 			    "1"=>$reg->course_name,
 				"2"=>$reg->course_group,
 				"3"=>$reg->course_description,
 				"4"=>$reg->grade,
				//"5"=>$reg->usertype,
				//"5"=>"<img src='../stuff/sitio/".$reg->foto."' height='50px' width='50px'>",
				/*"6"=>$reg->nacimiento,
                "7"=>$reg->lic,
                "8"=>$reg->maes,
                "9"=>$reg->doc,
                "10"=>$reg->resumen,
				"11"=>$reg->pass,
				"12"=>$reg->fk_carr,
				"13"=>$reg->fk_duracion*/
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
?>