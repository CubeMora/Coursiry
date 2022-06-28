var tabla1;

//Función que se ejecuta al foto
function init(){
	mostrarformU(false);
	listarU();

	$("#formularioU").on("submit",function(e)
	{
		guardaryeditarU(e);	
	})
		//función para edición de imagen

    $("#im5").hide();

}

//Función limpiar1
function limpiarU()
{
    $("#realname").val("");
	$("#username").val("");
    $("#pass").val("");
	$("#age").val("");
    $("#usertype").val("");
	/*$("#nacimiento").val("");
    $("#lic").val("");
	$("#maes").val("");
    $("#doc").val("");
    $("#resumen").val("");
	$("#pass").val("");
	$("#fk_carr").val("");
	$("#fk_duracion").val("");
    $("#id_al").val("");*/
    
}

//Función mostrar formulario
function mostrarformU(flag)
{
	limpiarU();
	if (flag)
	{
		$("#listadoregistrosU").hide();
		$("#formularioregistrosU").show();
		$("#btnGuardarU").prop("disabled",false);
		$("#btnagregarU").hide();
	}
	else
	{
		$("#listadoregistrosU").show();
		$("#formularioregistrosU").hide();
		$("#btnagregarU").show();
	}
}

//Función cancelarform1
function cancelarformU()
{
	limpiarU();
	mostrarformU(false);
}

//Función Listar
function listarU()
{
	tablaU=$('#tbllistadoU').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla1
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/usuario.php?op=listarU',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditarU(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardarU").prop("disabled",true);
	var formData = new FormData($("#formularioU")[0]);

	$.ajax({
		url: "../ajax/usuario.php?op=guardaryeditarU",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarformU(false);
	          tabla1.ajax.reload();
	    }

	});
	limpiarU();
}

function mostrarU(id_user)
{
	$.post("..//ajax/usuario.php?op=mostrarU",{id_user : id_user}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarformU(true);

        $("#realname").val(data.nombre);
        $("#username").val(data.apodo);
        $("#pass").val(data.password);
        $("#age").val(data.age);
        //$("#im5").show();
        //$("#im5").attr("src","../stuff/sitio/"+data.foto);
        $("#usertype").val(data.usertype);
        /*$("#nacimiento").val(data.nacimiento);  
        $("#lic").val(data.lic); 
        $("#maes").val(data.maes);
        $("#doc").val(data.doc);
		$("#resumen").val(data.resumen);
		$("#pass").val(data.pass);
		$("#fk_carr").val(data.fk_carr);
		$("#fk_duracion").val(data.fk_duracion);
        $("#id_al").val(data.id_al);*/

 	})
}




init();