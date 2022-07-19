<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>
<body>
 <div style="margin: 90px; ">
 <?php
    include 'nav.php';
    ?>
 </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
 <script>window.jQuery || document.write('<script src="../public/js/jquery-3.1.1.min.js"><\/script>')</script>
    <!-- DATATABLES -->
    <script src="../public/datatables/jquery.dataTables.min.js"></script>    
    <script src="../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../public/datatables/buttons.html5.min.js"></script>
    <script src="../public/datatables/buttons.colVis.min.js"></script>
    <script src="../public/datatables/jszip.min.js"></script>
    <script src="../public/datatables/pdfmake.min.js"></script>
    <script src="../public/datatables/vfs_fonts.js"></script> 

    <script src="../public/js/bootbox.min.js"></script> 
    <script src="../public/js/bootstrap-select.min.js"></script>  

<section>
    <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Manager <button class="btn btn-success" id="btnagregaru" onclick="mostrarformU(true)"><i class="fa fa-plus-circle"></i> Agregar</button--></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistrosU">
                        <table id="tbllistadoU" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            
                            <th>Real Name</th>
                            <th>UserName</th>
                            <th>Password</th>
                            <th>Age</th>
                            <th>User Type</th>
                            
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>

                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistrosU">
                        <form name="formularioU" id="formularioU" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>RealName:</label>
                            <input type="hidden" name="id_top" id="id_top">
                            <input type="input" class="form-control" name="realname" id="realname" >
                            <input type="hidden" name="ia1" id="ia1">
                            
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Username:</label>
                            <input type="input" class="form-control" name="username" id="username" >
                            <input type="hidden" name="ia2" id="ia2">
                            
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Password:</label>
                            <input type="input" class="form-control" name="pass" id="pass" >
                            <input type="hidden" name="ia3" id="ia3">
                            
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Age:</label>
                            <input type="input" class="form-control" name="age" id="age" >
                            <input type="hidden" name="ia4" id="ia4">
                            
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Usertype:</label>
                            <input type="input" class="form-control" name="usertype" id="usertype" >
                            <input type="hidden" name="ia5" id="ia5">
                            
                          </div>
                          <!-- <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Usertype:</label>
                            <input type="file" class="form-control" name="usertype" id="usertype" >
                            <input type="hidden" name="ia6" id="ia6">
                            <img src="" width="150px" height="120px" id="im6">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Productos:</label>
                            <input type="file" class="form-control" name="prod" id="prod" >
                            <input type="hidden" name="ia7" id="ia7">
                            <img src="" width="150px" height="120px" id="im7">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Categorias:</label>
                            <input type="file" class="form-control" name="cat" id="cat" >
                            <input type="hidden" name="ia8" id="ia8">
                            <img src="" width="150px" height="120px" id="im8">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Registro:</label>
                            <input type="file" class="form-control" name="rege" id="rege" >
                            <input type="hidden" name="ia9" id="ia9">
                            <img src="" width="150px" height="120px" id="im9">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tips & más:</label>
                            <input type="file" class="form-control" name="tips" id="tips" >
                            <input type="hidden" name="ia10" id="ia10">
                            <img src="" width="150px" height="120px" id="im10">
                          </div>
                          !-->
                          
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardarU"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarformU()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->
</section>
    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<script type="text/javascript" src="script/usuario.js"></script>
<?php
//require 'footer.php';
?>
</body>
</html>