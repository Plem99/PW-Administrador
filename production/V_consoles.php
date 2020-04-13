<?php
  //$variable = $_GET['var'];
  //include ('./modulos/backend/conexion.php');
  //include ('./modulos/backend/selectDietas.php');
  //session_start();
  //if (isset($_SESSION['usuario']) && $_SESSION['usuario']!='') {
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php include "./includes/icono.html" ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <title>Consolas</title>
        <?php include "./includes/header.html" ?>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <?php include "./includes/navbar.html" ?>
                </div>

                <?php include "./includes/top-navigation.html" ?>

                    <!-- page content -->
                    <div class="right_col" role="main">
                        <div class="">
                            <div class="page-title">
                                <div class="title_left">
                                    <h3>Consolas y Plataformas</h3>
                                </div>

                                <div class="title_right">
                                    <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Consolas y Plataformas</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                   <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registrarConsola">
                                      Registrar Consola
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="registrarConsola" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Consola</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <!-- contenido de modal Registrar consola -->
                                               <form>
                                                  <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Numero de consola:</label>
                                                    <input type="number" class="form-control" id="numeroConsole">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Serial</label>
                                                    <input type="text" class="form-control" id="serialConsole">
                                                  </div>
                                                    <div class="form-group">
                                                    <label for="plataformaConsole">Plataforma</label>
                                                        <select id="plataformaConsole" class="form-control">
                                                            <?php include 'modulos/backend/B_listaPlatforms.php'; ?>
                                                        </select>
                                                    </div>
                                                </form>
                                            <!-- contenido de modal Registrar consola -->
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarConsola">Cancelar</button>
                                            <button type="button" class="btn btn-primary" id="guardarConsola"f>Guardar Registro</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Modal registro de plataforma -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPlataforma">
                                      Registrar Plataforma
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalPlataforma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Plataforma</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <!-- contenido de modal Registrar plataforma -->
                                               <form action="modulos/backend/B_registrarPlatforms.php" method="POST" enctype="multipart/form-data" id="registrarPlataforma">
                                                  <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nombre</label>
                                                    <input type="text" classbutton="form-control" id="nombrePlatform">
                                                  </div>
                                                  <div class="form-group">

                                                 <label for="FileImage">Seleccionar imagen</label>
                                                    <input type="file" name="FileImage" id="imagenPlatform">
                                                    <p class="help-block">Solo archivos jpg,jpeg,png and gif con un tamaño máximo de 1 MB.</p>
                                                  </div>
                                                  <button class="btn btn-primary" id="guardarConsola">Subir Archivo</button>

                                                </form>
                                            <!-- contenido de modal Registrar consola -->
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarConsola">Cancelar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Consolas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Plataformas</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row" id="ConsolesVista">
                                                    <?php //include "./modulos/frontend/F_consoles.php"?>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="row" id="PlatformsVista">
                                                    <?php //include "./modulos/frontend/F_tablaDietas.php"?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /page content -->
                        </div>
                    </div>
                    <!-- footer content -->
                    <footer>
                        <?php include "./includes/footer.html" ?>
                    </footer>
                    <!-- /footer content -->
            </div>
        </div>
        <?php include "./includes/scripts.html" ?>
    </body>
    <script>
        $.ajax({
            url: 'modulos/backend/B_tablaConsoles.php',
            type: 'GET',
            success: function (r) {
                $('#ConsolesVista').html(r);
            }
        });

        $.ajax({
            url: 'modulos/backend/B_tablaPlatforms.php'﻿,
            type: 'GET',
            success: function (r) {
                $('#PlatformsVista').html(r);
            }
        });
function registrarConsola(){
  var numero = $("#numeroConsole").val();
  var serial = $("#serialConsole").val();
  var plataforma = $("#plataformaConsole").val();
            $.ajax({
            url: 'modulos/backend/B_registrarConsoles.php',
            type: 'POST',
            data:{
                  numeroC: numero,
                  serialC: serial,
                  plataformaC: plataforma
                },
            success: function(data){
                Swal.fire({
                icon: 'success',
                title: 'BIEN HECHO PENDEJO',
                text: data
              });
            },
            error: function(data){
              Swal.fire({
                icon: 'warning',
                title: 'Error',
                text:data,
              });
            }
        });
  }
</script>

    </html>
    <?php
  //}else{
  //  header("Location: ../index.php");
  //}
 ?>