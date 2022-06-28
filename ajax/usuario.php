<?php 
session_start();
require_once "../modelos/Usuario_modelo.php";

$usuario=new usuario();

$id_user=isset($_POST["id_user"])? limpiarCadena($_POST["id_users"]):"";
$nombre=isset($_POST["realname"])? limpiarCadena($_POST["realname"]):"";
$apodo=isset($_POST["username"])? limpiarCadena($_POST["username"]):"";
$password=isset($_POST["pass"])? limpiarCadena($_POST["pass"]):"";
$age=isset($_POST["age"])? limpiarCadena($_POST["age"]):"";
$usertype=isset($_POST["usertype"])? limpiarCadena($_POST["usertype"]):"";



switch ($_GET["op"]){
	case 'guardaryeditarU':

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
		if (empty($id_user)){
			$rspta=$usuario->insertarU($nombre, $apodo, $password, $age, $usertype);
			echo $rspta ? "Usuario Registrado" : "Usuario no se pudo registrar";
		}
		else {
			$rspta=$usuario->editarU($id_user,$nombre, $apodo, $password, $age, $usertype);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'mostrarU':
		$rspta=$usuario->mostrarU($id_user);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;
	break;

	case 'listarU':
		$rspta=$usuario->listarU();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrarU('.$reg->id_user.')"><i class="fas fa-pencil-alt"></i></button>',
 			    "1"=>$reg->realname,
 				"2"=>$reg->username,
 				"3"=>$reg->pass,
 				"4"=>$reg->age,
				"5"=>$reg->usertype,
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