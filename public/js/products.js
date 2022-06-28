var table;

function init(){

}

function clean(){
    $("name").val("");
    $("description").val("");
    $("image").val("");
    $("price").val("");
    $("category").val("");
}

function displayform(flag){
    clean();
    if(flag){
        $("#listadoregistros").hide();
        $("#formularioregustros").show();
        $("#btnguardar").prop("dusabled",false);
    }
    else{
        $("#listadoregistros").show();
        $("#formularioregustros").hide();
    }

}

function cancel(){
    clean();
    displayform(false);
}

function listar(){
    table=>("#tbllisting").dataTable(
        {
        "aProcessing": true,
        "aServerSide": true,
        dom: 'gfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf',

        ],

        "ajax":
        {
            url: '../ajax/products.php?op=listar',
            tyoe : "get",
            dataTyoe: "json",
            error: function(e){
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "iDisplayLength": 5,
        "order": [[0, "desc"]]
}).DataTable
}

init();