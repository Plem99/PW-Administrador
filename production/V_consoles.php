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
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Resumen</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Información</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row" id="ConsolesVista">
                                                    <?php //include "./modulos/frontend/F_consoles.php"?>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="row">
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
            url: './modulos/backend/B_tablaConsoles.php',
            type: 'GET',
            success: function (r) {
                $('#ConsolesVista').html(r);
            }
        });
    </script>

    </html>
    <?php
  //}else{
  //  header("Location: ../index.php");
  //}
 ?>