<?php
  //include ('./modulos/backend/conexion.php');
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
            <title>Torneos</title>
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
                                        <h3>Torneos</h3>
                                    </div>

                                    <div class="title_right">
                                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">

                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="col-md-12 col-sm-6">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2> Torneos</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Proximos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" onclick="allTorunaments()">Todos</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row" id="ProximosTorneos">
                                                        
                                                        <!-- Cambiar para mi modulo de frontend Este es el basico-->
                                                        <?php //include "./modulos/frontend/F_proxTournaments.php"?> 
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="row">
                                                        <!-- Cambiar para mi modulo de frontend - Este es el de la tabla--> 
                                                        <?php include "./modulos/frontend/F_tournaments.php"?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /page content -->

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

            //por mi script de tabla de todos los Torneos 
        function allTorunaments(){
            $.ajax({
                url: '../modulos/backend/B_allTournaments.php',
                type: 'GET',
                success: function (r) {
                    $('#tablaTorneos').html(r);
                }
            });
        }
        $.ajax({
            url: '../modulos/backend/B_Gamers.php',
            type: 'GET',
            success: function (r) {
                $('#GamersVista').html(r);
            }
        });
        </script>

    </html>
    <?php
  //}else{
  //  header("Location: ../index.php");
  //}
 ?>